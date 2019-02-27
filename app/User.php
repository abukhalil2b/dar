<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;
use Spatie\Image\Manipulations;

class User extends Authenticatable implements HasMedia
{
    use HasMediaTrait;
    use Notifiable;

    protected $fillable = [
        'first_name',
        'second_name',
        'third_name',
        'last_name',
        'gender', 
        'mobile',
        'email',
        'password',
        'user_type',
        'state_id',
        'level_id'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];


    public function level()
    {
        return $this->belongsTo(Level::class);
    }
    

}
