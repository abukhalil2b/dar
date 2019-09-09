<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{

    protected $fillable = [
        'year',
        'month',
        'program_tag',
    ];

    public function students()
    {
        return $this->belongsToMany(Student::class,'student_program','program_id','student_id');
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
