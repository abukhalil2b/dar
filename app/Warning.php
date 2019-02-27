<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warning extends Model
{

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

}
