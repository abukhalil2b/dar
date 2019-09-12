<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentMission extends Model
{
    protected $table = 'student_mission';
    protected $fillable = ['student_id','mission_number'];
    public $timestamps = false;
}
