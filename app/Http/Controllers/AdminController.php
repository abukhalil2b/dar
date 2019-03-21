<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Warning;
use App\Program;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } 

    public function studentWarningIndex($program_id){
    	
        if($program_id!=null){
            $warnings = Warning::where('program_id',$program_id)
            ->where('against','student')
            ->get();
            $programs = Program::all();
            return view('admin.student.warning.index',compact('warnings','programs'));            
        }

    }


    public function teacherWarningIndex(){
    	$program = Program::orderBy('id','desc')->first();
        if($program!=null){
            $warnings = Warning::where('program_id',$program->id)
            ->where('against','teacher')
            ->get();
            return view('admin.teacher.warning.index',compact('warnings'));            
        }

    }
}
