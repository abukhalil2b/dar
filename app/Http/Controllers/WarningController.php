<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Warning;
use App\Program;

class WarningController extends Controller
{



    public function warningShow($student_id){
    	$warnings = Warning::
    	where('program_id',$program->id)
    	->where('student_id',$student_id)
    	->get();
    	return view('admin.student.student_has_warning',compact('warnings'));
    }

    public function warningAdminCommentCreate($warning_id){
    	$warning = Warning::find($warning_id);
    	return view('admin.student.warning_list_edit',compact('warning'));
    }

    public function warningAdminCommentStore(Request $request){
        // return $request->all();
        Warning::where('id',$request->warning_id)->update(['comment'=>$request->comment]);
        return redirect()->route('admin.warning.student.index');
    }














}
