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
        $programs = Program::orderBy('id','desc')->get();
        return view('program.index',compact('programs'));
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
            'program_tag' =>'required'
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
