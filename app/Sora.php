<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sora extends Model
{

    public function juz()
    {
        return $this->belongsTo(Juz::class);
    }





}
