<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Student;
use App\Program;
use App\User;
use App\Sora;
use App\Warning;
use App\Record;
use DB;
class TeacherController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function studentList()
    {	
        $lastRecord = Record::orderBy('id','decsc')->first();
        $students = DB::table('student_program')->leftjoin('students','student_program.student_id','students.id')
        ->select(
            DB::raw('
                    student_program.id as present_id,
                    student_program.notebook,
                    student_program.present_time,
                    student_program.white_dishdash,
                    student_program.not_mosbil,
                    student_program.pen_reader,
                    student_program.white_mosar,
                    student_program.present,
                    students.id as student_id,
                    students.first_name,
                    students.last_name 
            '))
        ->where('record_id',$lastRecord->id)
        ->get();
        return view('teacher.student_list',compact('students','lastRecord'));
    }

    public function presentDelete($present_id)
    {   
        DB::table('student_program')->where('student_program.id',$present_id)->update(['present'=>0]);
        return redirect()->route('teacher.studentlist')->with(['status'=>'تم']);
    }

    public function presentCreate($student_id,$present_id)
    {   
        $lastRecord = Record::orderBy('id','decsc')->first();
        $students = DB::table('student_program')->leftjoin('students','student_program.student_id','students.id')
        ->select(
            DB::raw('
                    student_program.id as present_id,
                    student_program.notebook,
                    student_program.present_time,
                    student_program.white_dishdash,
                    student_program.not_mosbil,
                    student_program.pen_reader,
                    student_program.white_mosar,
                    student_program.present,
                    student_program.other_note,
                    students.id as student_id,
                    students.first_name,
                    students.last_name 
            '))
        ->where('students.id',$student_id)->get();
        foreach($students as $student){
            $student;
        }
        return view('teacher.student_present_create',compact('student','lastRecord'));
    }

    public function presentStore(Request $request)
    {   
    // return $request->all();
        $data = [
            'present_time'      =>$request->present_time,
            'pen_reader'        =>$request->pen_reader,
            'notebook'          =>$request->notebook,
            'white_dishdash'    =>$request->white_dishdash,
            'white_mosar'       =>$request->white_mosar,
            'not_mosbil'        =>$request->not_mosbil,
            'present'           =>$request->present,
            'other_note'        =>$request->other_note
        ];
        DB::table('student_program')->where('id',$request->present_id)->update($data);
        return redirect()->route('teacher.studentlist')->with(['status'=>'تم']);
    }



    public function writeDownNoteStore(Request $request)
    {	
    	//return $request->all();
        
     $data= [
            'present_time'  =>$request->present_time,
            'gender'        =>$request->gender,
            'pen_reader'    =>$request->pen_reader,
            'notebook'      =>$request->notebook,
            'white_dishdash'=>$request->white_dishdash,
            'white_mosar'   =>$request->white_mosar,
            'not_mosbil'    =>$request->not_mosbil,
            'other_note'    =>$request->other_note,
            'user_id'       =>$request->user_id,
            'student_id'    =>$request->student_id,
            'program_id'    =>$request->program_id,
            'program_tag'   =>$request->program_tag,
            'year'          =>$request->year,
            'month'         =>$request->month,
            'day'           =>$request->day
            ];
            
            if(DB::table('student_program')->insert($data)){
                return redirect()->route('teacher.studentlist')->with(['status'=>'تم']);
            }
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
