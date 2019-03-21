<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Student;
use App\Program;
use App\User;
use App\Sora;
use App\Warning;
use DB;
class TeacherController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function studentList()
    {	
        $lastProgram = Program::orderBy('id','desc')->first();
        $level_id = Auth::user()->level_id;
        if($level_id==null){
            $students = Student::with(['programs'=>function($q) use($lastProgram ){return $q->where('program_id',$lastProgram->id)->select('present');}])->get();
        }else{
            $students = Student::whereHas('levelHasStudentPermission',function($query) use ($level_id){
                $query->where('level_has_student_permission.level_id',$level_id);
            })->get();

        }
        //return $students[0]->programs[0]->present ; 
        
        return view('teacher.student_list',compact('students'));
    }

    public function studentListOther(){
        $lastProgram = Program::orderBy('id','desc')->first();
        $level_id = Auth::user()->level_id;
        if($level_id==null){
            $students = Student::with(['programs'=>function($q) use($lastProgram ){return $q->where('program_id',$lastProgram->id)->select('present');}])->get();
        }else{
            $students = Student::whereHas('levelHasStudentPermission',function($query) use ($level_id){
                $query->where('level_has_student_permission.level_id',$level_id);
            })->get();

        }
        return view('teacher.student_list_other',compact('students'));
    }

    public function writeDownNoteStore(Request $request)
    {	
    	//return $request->all();
        
     $data= [
            'present_time'  =>$request->present_time,
            'pen_reader'    =>$request->pen_reader,
            'notebook'      =>$request->notebook,
            'white_dishdash'=>$request->white_dishdash,
            'white_mosar'   =>$request->white_mosar,
            'not_mosbil'    =>$request->not_mosbil,
            'other_note'    =>$request->other_note,
            'user_id'       =>$request->user_id,
            'student_id'    =>$request->student_id,
            'program_id'    =>$request->program_id,
            'program_tag'    =>$request->program_tag
            ];
            
            if(DB::table('student_program')->insert($data)){
                return redirect()->route('teacher.studentlist')->with(['status'=>'تم']);
            }
    }

    public function writeDownNoteStoreOther(Request $request)
    {   
        //return $request->all();
        
     $data= [
            'present_time'  =>$request->present_time,
            'user_id'       =>$request->user_id,
            'student_id'    =>$request->student_id,
            'program_id'    =>$request->program_id,
            'program_tag'   =>$request->program_tag
            ];
            
            if(DB::table('student_program')->insert($data)){
                return redirect()->route('teacher.studentlist')->with(['status'=>'تم']);
            }
    }

    public function showStudent($student_id)
    {	
        $lastProgram = Program::orderBy('id','desc')->first();
        if($lastProgram!=null){
             $students = DB::table('students')->leftJoin('student_program','students.id','student_program.student_id')
            ->where('students.id',$student_id)
            // ->where('student_program.present',1)
            ->where('student_program.program_id',$lastProgram->id)
            ->select('students.id','students.first_name','students.second_name',
                'students.third_name','students.last_name',
                'student_program.id as note_id','student_program.present_time',
                'student_program.white_dishdash',
                'student_program.not_mosbil','student_program.pen_reader','student_program.notebook',
                'student_program.white_mosar','student_program.other_note'
            )->get();
            if(count($students)>0){
                //edit note
                $student = $students[0];
                return view('teacher.student_present_note_edit',compact('student'));
            }
            else{
                //new note
                $student = Student::find($student_id);
                $msg = 'البيانات غير محفوظة';
                return view('teacher.student_present_note_create',compact('student','lastProgram','msg'));
            }   
        }
        
    	
    }


    public function showStudentOther($student_id)
    {   
        $lastProgram = Program::orderBy('id','desc')->first();
        if($lastProgram!=null){
             $students = DB::table('students')->leftJoin('student_program','students.id','student_program.student_id')
            ->where('students.id',$student_id)
            // ->where('student_program.present',1)
            ->where('student_program.program_id',$lastProgram->id)
            ->select('students.id','students.first_name','students.second_name',
                'students.third_name','students.last_name',
                'student_program.id as note_id','student_program.present_time',
                'student_program.white_dishdash',
                'student_program.not_mosbil','student_program.pen_reader','student_program.notebook',
                'student_program.white_mosar','student_program.other_note'
            )->get();
            if(count($students)>0){
                //edit note
                $student = $students[0];
                return view('teacher.student_present_note_edit_other',compact('student'));
            }
            else{
                //new note
                $student = Student::find($student_id);
                $msg = 'البيانات غير محفوظة';
                return view('teacher.student_present_note_create_other',compact('student','lastProgram','msg'));
            }   
        }
        
    }


    public function writeDownNoteUpdate(Request $request)
    {   //return $request->all();
        $data = [
            'present_time'=>$request->present_time,
            'pen_reader'=>$request->pen_reader,
            'notebook'=>$request->notebook,
            'white_dishdash'=>$request->white_dishdash,
            'white_mosar'=>$request->white_mosar,
            'not_mosbil'=>$request->not_mosbil,
            'other_note'=>$request->other_note
        ];
        DB::table('student_program')->where('id',$request->note_id)->update($data);
        return redirect()->back()->with(['status'=>'تم']);
    }


    public function reportStudentCreate($student_id){
        $lastProgram = Program::orderBy('id','desc')->first();
        if($lastProgram!=null){
            $student = Student::find($student_id);
            $soras = Sora::all();
            $msg = 'البيانات غير محفوظة';
            $reports = DB::table('reports')->where('student_id',$student_id);

            $lastReports = $reports->orderBy('id','desc')->get();

            $todyReports = $reports->where('program_id',$lastProgram->id)->get();
            
            if(count($todyReports)>0){
                $todyReport = $todyReports->first();
                return view('teacher.report.edit',compact('todyReport','student','soras'));
            }else{
                $lastReport= $lastReports->first();
                return view('teacher.report.create',
                    compact('lastProgram','lastReport','student','msg','soras'));
            }
        }
    }

    public function reportStudentStore(Request $request){
        $sora = Sora::find($request->sora_id);
        
        $data = [
            'sora_id'   =>$request->sora_id,
            'sora_name' =>$sora->name,
            'juz_id' =>$sora->juz_id,
            'aya_from'  =>$request->aya_from,
            'aya_to'    =>$request->aya_to,
            'user_id'   =>$request->user_id,
            'student_id'=>$request->student_id,
            'program_id'=>$request->program_id
        ];

        if (DB::table('reports')->insert($data)) {
            return redirect()->back()->with(['status'=>'تم']);
        }
        return redirect()->back();
    }

    public function reportStudentUpdate(Request $request){
        $data = ['sora_id'=>$request->sora_id,'aya_from'=>$request->aya_from,'aya_to'=>$request->aya_to];
        if(DB::table('reports')->where('id',$request->report_id)->update($data)){
            return redirect()->route('teacher.studentlist')->with(['status'=>'تم']);
        }
        return redirect()->back();
    }


    public function warningStudentCreate($student_id){
        //$lastProgram = Program::orderBy('id','desc')->first();
        $student = Student::find($student_id);
        $msg = 'البيانات غير محفوظة';
        $program = Program::orderBy('id','desc')->first();
        $lastWarning = Warning::where('program_id',$program->id)->orderBy('id','desc')
        ->where('student_id',$student_id)->get();

        
        if(count($lastWarning)>0){
            $todyWarning = $lastWarning->first();
            return view('teacher.warning.edit',compact('todyWarning','student'));
        }else{
            return view('teacher.warning.create',compact('student','msg'));
        }
    }

    public function warningStudentStore(Request $request){//return $request->all();
        $program = Program::orderBy('id','desc')->first();
        if($program!=null){
            $user_id = Auth::user()->id;
            $data = [
                'program_id'    =>$program->id,
                'against'       =>"student",
                'user_id'       =>$user_id,
                'student_id'    =>$request->student_id,
                'note'          =>$request->note,
                'comment'       =>$request->comment
            ];

            if (DB::table('warnings')->insert($data)) {
                return redirect()->route('student.warning.create',['student_id'=>$request->student_id])->with(['status'=>'تم']);
            }
            return redirect()->route('student.warning.create',['student_id'=>$request->student_id]);            
        }

    }

    public function warningStudentUpdate(Request $request){
        $data = ['note'=>$request->note];
        if(DB::table('warnings')->where('id',$request->warning_id)->update($data)){
            return redirect()->route('teacher.studentlist')->with(['status'=>'تم']);
        }
        return redirect()->back();
    }












}
