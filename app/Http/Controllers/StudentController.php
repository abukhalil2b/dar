<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Student;
use App\Program;
use App\Mark;
use App\Level;
use App\State;
use DB;

class StudentController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }
 
     public function studentSearch(Request $request)
    {

       $this->validate($request,[
            'search'=>'required',
        ]); 

        $search = $request->search;
        $students = Student::where('id',$search)
        ->orWhere('first_name', 'LIKE', '%' . $search . '%')
        ->orWhere('second_name', 'LIKE', '%' . $search . '%')
        ->orWhere('third_name', 'LIKE', '%' . $search . '%')
        ->orWhere('last_name', 'LIKE', '%' . $search . '%')
        ->orWhere('mobile', 'LIKE', '%' . $search . '%')
        ->paginate(100);
        return view('admin.student.index',compact('students'));
    } 

    public function studentIndex()
    {
        $levels = Level::all();
        $states = State::all();
        $students = Student::all();
        return view('admin.student.index',compact('students','levels','states'));
    }

    public function studentEdit($student_id)
    {
        $states = State::all();
        $student = Student::find($student_id);
        return view('admin.student.edit',compact('student','states'));
    }

    public function studentStore(Request $request)
    {
        $this->validate($request,[
            'first_name'        =>'required',
            'second_name'       =>'required',
            'last_name'         =>'required',
            'gender'            =>'required',
        ]);

        if($student = Student::create($request->all())){
            
            $level = Level::find($request->level_id);
            $level->levelHasStudentPermission()->attach($student->id);
            return redirect()->back()->with(['status'=>'تم']);
        }

    }

    public function avatarCreate($student_id)
    {

        $student = Student::find($student_id);
        $avatar = $student->getFirstMediaUrl('avatars');
        //dd($avatar);
        return view('admin.student.avatar.create',compact('student','avatar'));
    }

    public function avatarStore(Request $request)
    {
       //return $request->all();
        if($request->hasFile('avatar')){
            $this->validate($request,[
                'avatar'=>'required|image'
            ]);
        }

        
        $student = Student::find($request->student_id);
        $student->addMedia($request->avatar)
                ->toMediaCollection('avatars');
        return redirect()->route('admin.student.index')->with(['status'=>'تم']);
    }

    public function studentUpdate(Request $request)
    {
        $data = [
        'first_name'        =>$request->first_name,
        'second_name'       =>$request->second_name,
        'third_name'        =>$request->third_name,
        'last_name'         =>$request->last_name,
        'gender'            =>$request->gender,
        'parent_follow_up'  =>$request->parent_follow_up,
        'mobile'            =>$request->mobile,
        'national_id'       =>$request->national_id,
        'age'               =>$request->age,
        'started_at_grade'  =>$request->started_at_grade,
        'grade'             =>$request->grade,
        'state_id'          =>$request->state_id,
        'note'              =>$request->note,
    ];

        Student::where('id',$request->student_id)->update($data);
        return redirect()->back()->with(['status'=>'تم']);
    }

    public function studentShiftCreate($student_id)
    {
        $student = Student::find($student_id);
        $levels = Level::all();
        return view('admin.student.shift',compact('student','levels'));
    }

    public function studentShift(Request $request)
    {
        $this->validate($request,[
            'student_id'=>'required',
            'level_id'  =>'required'
        ]);

        if(Student::where('id',$request->student_id)->update(['level_id'=>$request->level_id])){
            $student = Student::find($request->student_id);
            // $level->levelHasStudentPermission()->sync($request->student_id);
            $student->levelHasStudentPermission()->sync($request->level_id);
            return redirect()->route('admin.student.index')->with(['status'=>'تم']);
        }

    }

    public function markIndex()
    {
        $Program = Program::orderBy('id','DESC')->first();
        $marks = Mark::selectRaw('sum(marks.point) as total_point, marks.student_id, students.first_name as student_name, programs.name as program_name')
        ->join('students','students.id','=','marks.student_id')
        ->join('programs','programs.id','=','marks.program_id')
        ->where('marks.program_id',$Program->id)
        ->orderBy('total_point','DESC')
        ->groupBy('marks.student_id','marks.program_id','students.first_name','programs.name')
        ->get();
        
        return view('admin.student.mark.index',compact('marks','Program'));
    }



    public function markOtherPrograms()
    {
        $Programs = Program::orderBy('id','DESC')->get();
        
        return view('admin.student.mark.other_programs',compact('Programs'));
    }

    public function markOtherProgramsSearch(Request $request)
    {
        if($request->programs!=null){

            $marks = Mark::selectRaw('sum(marks.point) as total_point, marks.student_id, students.first_name as student_name, programs.name as program_name')
            ->join('students','students.id','=','marks.student_id')
            ->join('programs','programs.id','=','marks.program_id')
            ->whereIn('marks.program_id',$request->programs)
            ->orderBy('total_point','DESC')
            ->groupBy('marks.student_id','marks.program_id','students.first_name','programs.name')
            ->get();
            
            return view('admin.student.mark.search_result_in_other_program',compact('marks'));
        }
    }
















    
}
