<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public function fathers()
    {
    	return $this->hasMany(Father::class);
    }
    
    public function users()
    {
    	return $this->hasMany(User::class);
    }
    

}
