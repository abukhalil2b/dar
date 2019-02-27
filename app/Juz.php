<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Juz extends Model
{
    public function reports()
    {
        return $this->hasMany(Report::class);
    }

    public function soras()
    {
        return $this->hasMany(Sora::class);
    }











}
