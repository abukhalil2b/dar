<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{

    public function students()
    {
    	return $this->hasMany(Student::class);
    }
    
    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function levelHasStudentPermission()
    {
    	return $this->belongsToMany(Student::class,'level_has_student_permission','level_id','student_id');
    }


}
