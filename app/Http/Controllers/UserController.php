<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Level;
use App\State;
use App\Student;
use App\Program;
use DB;

class UserController extends Controller
{
    
    public function __construct()
    {
        //$this->middleware('auth');
    }
    
    /*  teaches */
     public function teacherIndex()
    {
        $teachers = User::where('user_type','teacher')->get();
        $levels = Level::all();
        $states = State::all();
        return view('admin.teacher.index',compact('teachers','levels','states'));
    }

    public function teacherEdit($user_id)
    {
        $states = State::all();
        $teacher = User::find($user_id);
        return view('admin.teacher.edit',compact('teacher','states'));
    }

    public function teacherStore(Request $request)
    {
        //return $request->all();
        $this->validate($request,[
            'first_name'   =>'required',
            'gender'       =>'required',
            'email'        =>'required',
            'password'     =>'required',
            'user_type'    =>'required',
            'level_id'     =>'required',
            'state_id'     =>'required',
        ]);

        $data = [
            'first_name'=>$request->first_name,
            'second_name'=>$request->second_name,
            'third_name'=>$request->third_name,
            'last_name'=>$request->last_name,
            'gender'=>$request->gender,
            'mobile'=>$request->mobile,
            'level_id'=>$request->level_id,
            'state_id'=>$request->state_id,
            'user_type' => $request->user_type,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];
        if(User::create($data)){
            return redirect()->back()->with(['status'=>'تم']);
        }

    }

    public function teacherUpdate(Request $request)
    {
        $this->validate($request,[
            'first_name'   =>'required',
            'second_name'  =>'required',
            'gender'       =>'required',
            'state_id'     =>'required',
        ]);

        if($request->has('password'))
        {
            $data = ['password' => Hash::make($request->password)];
        }

        $data = [
            'first_name'=>$request->first_name,
            'second_name'=>$request->second_name,
            'third_name'=>$request->third_name,
            'last_name' =>$request->last_name,
            'gender'    =>$request->gender,
            'mobile'    =>$request->mobile,
            'note'      =>$request->note,
            'state_id'  =>$request->state_id
        ];

        if(User::where('id',$request->teacher_id)->update($data))
        {
            return redirect()->back()->with(['status'=>'تم']);
        }

    }


    public function teacherShiftCreate($user_id)
    {
        $user = User::find($user_id);
        return view('admin.teacher.shift',compact('user'));
    }

    public function teacherShift(Request $request)
    {
        $this->validate($request,[
            'user_id'   =>'required',
            'level_id'   =>'required'
        ]);


        if(User::where('id',$request->user_id)->update(['level_id'=>$request->level_id])){
            return redirect()->back()->with(['status'=>'تم']);
        }

    }

    
    /*  students belongs to teacher */
    public function adminStudentPresent()
    {   
        $lastProgram = Program::orderBy('id','desc')->first();
        $students = DB::table('students')
        ->select('students.id','students.first_name','students.second_name',
            'students.third_name','students.last_name',
            'student_program.present_time','student_program.white_dishdash',
            'student_program.not_mosbil','student_program.pen_reader','student_program.notebook',
            'student_program.white_mosar','student_program.other_note'
        )
        ->where(['program_id'=>$lastProgram->id,'present'=>1])
        ->leftJoin('student_program','students.id','student_program.student_id')->get();
        return view('admin.student.studentpresent',compact('students','lastProgram'));
    }
















}
