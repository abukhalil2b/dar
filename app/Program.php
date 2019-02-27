<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{

    protected $fillable = [
        'name'
    ];


    public function students()
    {
        return $this->belongsToMany(Student::class,'student_program','program_id','student_id')
        ->withPivot('present_time');
    }

    public function reports()
    {
        return $this->hasMany(Report::class);
    }

    public function marks()
    {
        return $this->hasMany(Mark::class);
    }

}
