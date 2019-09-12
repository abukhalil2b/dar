<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    protected $fillable = ['page','descr','in_juz'];
    public $timestamps = false;
}
