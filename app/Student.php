<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;
use Spatie\Image\Manipulations;

class Student extends Model implements HasMedia
{
    use HasMediaTrait;
    
    protected $fillable = [
    'first_name',
    'second_name',
    'third_name',
    'last_name',
    'gender',
    'parent_follow_up',
    'mobile',
    'national_id',
    'age',
    'started_at_grade',
    'grade',
    'level_id',
    'state_id',
    'note'];

    // public function registerMediaConversions(Media $media = null)
    // {
    //     $this->addMediaConversion('thumb')
    //         ->performOnCollections('avatars', 'post_title')
    //         ->width(368)
    //         ->height(232)
    //         ->sharpen(10);

    //   $this->addMediaConversion('old-picture')
    //   ->sepia()
    //   ->border(10, 'black', Manipulations::BORDER_OVERLAY);
    // }

    public function father()
    {
        return $this->belongsTo(Father::class);
    }

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function programs()
    {
        return $this->belongsToMany(Program::class,'student_program','student_id','program_id')
        ->withPivot(['present_time','present']);
    }

    public function levelHasStudentPermission()
    {
        return $this->belongsToMany(Level::class,'level_has_student_permission','student_id','level_id');
    }

    public function warnings()
    {
        return $this->hasMany(Warning::class);
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
