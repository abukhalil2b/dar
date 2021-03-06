<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Father extends Model
{

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function students()
    {
    	return $this->hasMany(Student::class);
    }
}
