<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;
use App\Level;
use App\Student;
use App\Semester;

class ProgramController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function adminProgramSemesterStore(Request $request)
    {
        
        $this->validate($request,[
            'name'=>'required',
        ]);

        if(Semester::create($request->all())){
            Student::where(['gender'=>'m'])->update(['semester_id'=>'0']);
            return redirect()->route('admin.program.semester.index')->with(['status'=>'تم']);
        }
    }
    public function adminProgramSemesterCreate()
    {
        return view('admin.program.semester.create');
    }
    public function adminProgramSemesterIndex()
    {
        $semesters = Semester::all();
        return view('admin.program.semester.index',compact('semesters'));
    }


    public function programIndex($program_tag)
    {
        $lastSemester = Semester::orderBy('id','desc')->first();
        $programs = Program::orderBy('id','desc')->where(['semester_id'=>$lastSemester->id])
        ->with('students')->where(['program_tag'=>$program_tag,'gender'=>'male'])->get();
        return view('program.index',compact('programs','program_tag','lastSemester'));
    }

    public function programEdit($program_id)
    {
        $program = Program::find($program_id);
        return view('program.edit',compact('program'));
    }

    public function programStore(Request $request)
    {
        
        $this->validate($request,[
            'name'        =>'required',
            'program_tag' =>'required',
            'semester_id' =>'required',
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








}
