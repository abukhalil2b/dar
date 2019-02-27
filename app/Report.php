<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function juz()
    {
        return $this->belongsTo(Juz::class);
    }








}
