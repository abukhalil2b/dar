<?php

Route::get('student/report',function(){
    $students = App\Student::whereDoesntHave('reports',function($query){
        $query->where('reports.program_id',1);
    })->get();
    return $students;
});


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


    Route::get('/{program_tag}/index', 'ProgramController@programIndex')
    ->name('program.index');

    Route::get('/{program_id}/edit', 'ProgramController@programEdit')
    ->name('program.edit');
    
    Route::post('/store', 'ProgramController@programStore')
    ->name('program.store');
    
    Route::post('/update', 'ProgramController@programUpdate')
    ->name('program.update');


});

 


/* admin  student */
Route::prefix('admin/student')->group(function(){

    Route::get('/semester/create', 'StudentController@adminStudentSemesterCreate')
    ->name('admin.student.semester.create');

    Route::post('/semester/store', 'StudentController@adminStudentSemesterStore')
    ->name('admin.student.semester.store');

    Route::get('/semester/index', 'StudentController@adminStudentSemesterIndex')
    ->name('admin.student.semester.index');

    Route::post('/semester/subscribe','StudentController@adminStudentSemesterSubscribe')
    ->name('admin.student.semester.subscribe');

    Route::post('/search', 'StudentController@studentSearch')
    ->name('admin.student.search');

    Route::get('/index', 'StudentController@studentIndex')
    ->name('admin.student.index');
    
    Route::get('/present/today', 'StudentController@studentPresentToday')
    ->name('admin.student.present.today');

    Route::get('/present/month', 'StudentController@studentPresentMonth')
    ->name('admin.student.present.month');

    Route::get('/present/year', 'StudentController@studentPresentYear')
    ->name('admin.student.present.year');

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

    Route::post('/update', 'WarningController@warningAdminCommentStore')
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
 * admin progrqm
 */
Route::prefix('admin/program')->group(function(){
    Route::get('/semester/index', 'ProgramController@adminProgramSemesterIndex')
    ->name('admin.program.semester.index');
    Route::get('/semester/create', 'ProgramController@adminProgramSemesterCreate')
    ->name('admin.program.semester.create');
    Route::post('/semester/store','ProgramController@adminProgramSemesterStore')
    ->name('admin.program.semester.store');
});

/*   teacher */
Route::prefix('teacher')->group(function(){

    Route::get('/studentlist', 'TeacherController@studentList')
    ->name('teacher.studentlist');
    Route::get('/studentlist/other', 'TeacherController@studentListOther')
    ->name('teacher.studentlist.other');
    

    Route::get('/show/{student_id}/student', 'TeacherController@showStudent')
    ->name('teacher.show.student');

    Route::get('/show/{student_id}/student/other', 'TeacherController@showStudentOther')
    ->name('teacher.show.student.other');

    Route::post('/writedownnotes/store', 'TeacherController@writeDownNoteStore')
    ->name('teacher.writedownnotes.store');

    Route::post('/writedownnotes/store/other', 'TeacherController@writeDownNoteStoreOther')
    ->name('teacher.writedownnotes.store.other');

    Route::post('/writedownnotes/update', 'TeacherController@writeDownNoteUpdate')
    ->name('teacher.writedownnotes.update');

    Route::get('/report/student/{student_id}/create', 'TeacherController@reportStudentCreate')
    ->name('student.report.create');

    Route::post('/report/store', 'TeacherController@reportStudentStore')
    ->name('student.report.store');
    Route::post('/report/update', 'TeacherController@reportStudentUpdate')
    ->name('student.report.update');

    Route::get('/warning/student/{student_id}/create', 'TeacherController@warningStudentCreate')
    ->name('student.warning.create');
    Route::post('/warning/student/store', 'TeacherController@warningStudentStore')
    ->name('student.warning.store');
    Route::post('/warning/student/update', 'TeacherController@warningStudentUpdate')
    ->name('student.warning.update');

});


Route::get('/',function(){
    $program_tag = App\Program::orderBy('id','desc')->value('program_tag');
    return view('welcome',compact('program_tag'));
})->name('welcome')->middleware('auth');

Route::get('/home',function(){
    return view('home');
})->name('home');



