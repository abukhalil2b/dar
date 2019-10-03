<?php


/*  mission*/

Route::get('mission/student/{student_id}/missionlist', 'MissionController@missionlist')->name('mission.missionlist');
Route::get('mission/student/{student_id}/juzlist', 'MissionController@juzlist')->name('mission.juzlist');
Route::get('mission/{id}/juzlist/save', 'MissionController@save')->name('mission.save');
Route::get('mission/student/{student_id}/index', 'MissionController@index')->name('mission.index');
Route::post('mission/store', 'MissionController@store')->name('mission.store');
Route::get('mission/{mission_id}/delete', 'MissionController@delete')->name('mission.delete');

//Auth::routes();
/*auth*/
Route::get('user/logout', 'UserloginController@userLogout')
    ->name('user.logout');

Route::get('user/login', 'UserloginController@userShowLogin')
    ->name('user.login');

Route::post('user/login', 'UserloginController@userLogin')
    ->name('user.login');

/*  level  */
Route::prefix('level')->group(function(){
    Route::get('/index', 'ProgramController@levelIndex')
    ->name('level.index');
    
    Route::get('/{level_id}/edit', 'ProgramController@levelEdit')
    ->name('level.edit');
    
    Route::post('/store', 'ProgramController@levelStore')
    ->name('level.store');
    
    Route::post('/update', 'ProgramController@levelUpdate')
    ->name('level.update');
});

/*  program */
Route::prefix('program')->group(function(){

    Route::get('index', 'ProgramController@programIndex')
    ->name('program.index');

    Route::get('/{program_tag}/studentlist', 'ProgramController@programStudentlist')
    ->name('program.studentlist');

    Route::get('/{program_id}/edit', 'ProgramController@programEdit')
    ->name('program.edit');
    
    Route::post('/store', 'ProgramController@programStore')
    ->name('program.store');
    
    Route::post('/update', 'ProgramController@programUpdate')
    ->name('program.update');


});


/* admin  student */
Route::prefix('admin/student')->group(function(){
     
    Route::any('/subscribe', 'StudentController@studentSubscribeStore')
    ->name('admin.student.subscribe.store');

    Route::post('/search', 'StudentController@studentSearch')
    ->name('admin.student.search');

    Route::get('/index', 'StudentController@studentIndex')
    ->name('admin.student.index');
    
    Route::get('{program}/present/today', 'StudentController@studentPresentToday')
    ->name('admin.student.present.today');

    Route::get('/{student_id}/edit', 'StudentController@studentEdit')
    ->name('admin.student.edit');
    
    Route::post('/store', 'StudentController@studentStore')
    ->name('admin.student.store');
    
    Route::post('/update', 'StudentController@studentUpdate')
    ->name('admin.student.update');

    Route::get('/{student_id}/shift', 'StudentController@studentShiftCreate')
    ->name('admin.student.shift.create');

    Route::post('/shift', 'StudentController@studentShift')
    ->name('admin.student.shift');

    Route::get('{student_id}/avatar/create', 'StudentController@avatarCreate')
    ->name('admin.avatar.create');

    Route::post('/avatar/store', 'StudentController@avatarStore')
    ->name('admin.avatar.store');

    Route::get('/mark/index', 'StudentController@markIndex')
    ->name('admin.student.mark.index');
    Route::get('/mark/other/programs', 'StudentController@markOtherPrograms')
    ->name('admin.student.mark.other.programs');
    Route::post('/mark/other/programs/search', 'StudentController@markOtherProgramsSearch')
    ->name('admin.student.mark.search.in.other.programs');

    Route::get('{student_id}/report/index', 'StudentController@reportIndex')
    ->name('admin.student.report.index');
    Route::get('report/day', 'StudentController@reportDay')
    ->name('admin.student.report.day');
});

/*admin student reports*/
/*admin student warnings*/
Route::prefix('admin/warning')->group(function(){
    Route::get('{program_id}/student/index', 'AdminController@studentWarningIndex')
    ->name('admin.warning.student.index');

    Route::get('teacher/index', 'AdminController@teacherWarningIndex')
    ->name('admin.warning.teacher.index');

    Route::get('{warning_id}/show', 'WarningController@warningShow')
    ->name('admin.warning.show');

    Route::get('{warning_id}/edit', 'WarningController@warningAdminCommentCreate')
    ->name('admin.warning.edit');

    Route::post('/update', 'WarningController@warningAdminCommentUpdate')
    ->name('admin.warning.update');
    
});


/* admin  teacher */
Route::prefix('admin/teacher')->group(function(){

    Route::get('/index', 'UserController@teacherIndex')
    ->name('admin.teacher.index');

    Route::get('/{teacher_id}/details', 'UserController@teacherDetails')
    ->name('admin.teacher.details');
    
    Route::get('/{teacher_id}/edit', 'UserController@teacherEdit')
    ->name('admin.teacher.edit');
    

    Route::post('/store', 'UserController@teacherStore')
    ->name('admin.teacher.store');
    
    Route::post('/update', 'UserController@teacherUpdate')
    ->name('admin.teacher.update');

    Route::get('/{user_id}/shift', 'UserController@teacherShiftCreate')
    ->name('admin.teacher.shift.create');
    
    Route::post('/shift', 'UserController@teacherShift')
    ->name('admin.teacher.shift');

});



/**
 *      admin record
 */
Route::prefix('admin/')->group(function(){
    Route::get('record/index', 'AdminController@adminRecordIndex')->name('admin.record.index');
    Route::get('record/create', 'AdminController@adminRecordCreate')->name('admin.record.create');
    Route::post('record/store','AdminController@adminRecordStore')->name('admin.record.store');

    Route::post('record/present/store','AdminController@adminPresentStore')->name('admin.record.present.store');
});

/*   teacher */
Route::prefix('teacher')->group(function(){

    Route::get('/studentlist', 'TeacherController@studentList')
    ->name('teacher.studentlist');
    
    Route::get('present/{present_id}/delete', 'TeacherController@presentDelete')
    ->name('teacher.present.delete');

    Route::get('present/{student_id}/{present_id}/create', 'TeacherController@presentCreate')
    ->name('teacher.present.create');

    Route::post('present/store', 'TeacherController@presentStore')
    ->name('teacher.present.store');




    Route::get('/warning/student/{student_id}/create', 'TeacherController@warningStudentCreate')
    ->name('student.warning.create');
    Route::post('/warning/student/store', 'TeacherController@warningStudentStore')
    ->name('student.warning.store');
    Route::post('/warning/student/update', 'TeacherController@warningStudentUpdate')
    ->name('student.warning.update');

});


Route::get('/',function(){
    // $program_tag = App\Program::orderBy('id','desc')->value('program_tag');
    $lastRecord = App\Record::orderBy('id','desc')->first();
    if($lastRecord==null)$lastRecord=false;
    return view('welcome',compact('lastRecord'));
})->name('welcome')->middleware('auth');

Route::get('/home',function(){
    return view('home');
})->name('home');



