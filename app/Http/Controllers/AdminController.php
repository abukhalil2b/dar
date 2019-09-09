<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Warning;
use App\Program;
use App\Record;
use DB;
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


    public function adminRecordStore(Request $request)
    {
        
        $record = Record::create($request->all());
        $program_tag = $record->program_tag;
        if($program_tag=='fiqh'){
            $program = Program::orderBy('id','desc')->where('program_tag','fiqh')->first();
            $student_id = DB::table('student_figh_program')
            ->where('program_id',$program->id)->pluck('student_id');
            $program->students()->attach($student_id,['program_tag'=>$program_tag,'record_id'=>$record->id]);

        }

        if($program_tag=='anwar'){
            $program = Program::orderBy('id','desc')->where('program_tag','anwar')->first();
            $student_id = DB::table('student_anwar_program')
            ->where('program_id',$program->id)->pluck('student_id');
            $program->students()->attach($student_id,['program_tag'=>$program_tag,'record_id'=>$record->id]);

        }

        if($program_tag=='sundayhero'){
            $program = Program::orderBy('id','desc')->where('program_tag','sundayhero')->first();
            $student_id = DB::table('student_sundayhero_program')
            ->where('program_id',$program->id)->pluck('student_id');
            $program->students()->attach($student_id,['program_tag'=>$program_tag,'record_id'=>$record->id]);

        }


         return redirect()->route('admin.record.index');

    }
    public function adminRecordCreate()
    {
        return view('admin.record.create');
    }
    public function adminRecordIndex()
    {
        $records = Record::orderBy('id','desc')->get();
        return view('admin.record.index',compact('records'));
    }

    public function adminPresentCreate($tag)
    {

        return view('admin.record.present.create');
    }

    public function adminPresentStore(Request $request)
    {
        return redirect()->route('admin.record.present.create');
    }

}
