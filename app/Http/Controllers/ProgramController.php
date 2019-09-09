<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;
use App\Level;
use App\Student;

class ProgramController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function programIndex()
    {
        $programs = Program::all();
        return view('admin.program.create',compact('programs'));
    }

    public function programCreate()
    {
        return view('admin.program.create');
    }

    public function programEdit($program_id)
    {
        $program = Program::find($program_id);
        return view('program.edit',compact('program'));
    }

    public function programStore(Request $request)
    {
        $this->validate($request,[
            'program_tag' =>'required',
        ]);
        if(Program::create($request->all())){
            return redirect()->back()->with(['status'=>'تم']);
        }

    }

    public function programUpdate(Request $request)
    {
        $this->validate($request,[
            'name' =>'required'
        ]);

        if(Program::where('id',$request->program_id)->update(['name' =>$request->name])){
            return redirect()->back()->with(['status'=>'تم']);
        }
    }


    /*  level */
    public function levelIndex()
    {
        $levels = Level::orderBy('id','desc')->get();
        return view('level.index',compact('levels'));
    }

    public function programStudentlist($program_tag)
    {

        if($program_tag=='sundayhero'){
            $lastProgram = Program::orderBy('id','desc')->where('program_tag','sundayhero')->first();
            $students = Student::whereHas('studentHasSundayhero',function($query)use($lastProgram){
                $query->where('student_sundayhero_program.month',$lastProgram->month);
            })->get();
        }
        
        if($program_tag=='anwar'){
            $lastProgram = Program::orderBy('id','desc')->where('program_tag','anwar')->first();
            $students = Student::whereHas('studentHasAnwar',function($query)use($lastProgram){
                $query->where('student_anwar_program.month',$lastProgram->month);
            })->get();
        }

        if($program_tag=='fiqh'){
            $lastProgram = Program::orderBy('id','desc')->where('program_tag','fiqh')->first();
            $students = Student::whereHas('studentHasFiqh',function($query)use($lastProgram){
                $query->where('student_figh_program.month',$lastProgram->month);
            })->get();
        }

        return view('admin.program.studentlist',compact('students','lastProgram'));
    }

}
