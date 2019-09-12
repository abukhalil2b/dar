<?php

namespace App;
use DB;
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
    'parent_follow_up',
    'mobile',
    'national_id',
    'age',
    'grade',
    'level_id',
    'city_id',
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

    public function studentHasSundayhero()
    {
        return $this->belongsToMany(Program::class,'student_sundayhero_program','student_id','program_id');
    }
    public function studentHasFiqh()
    {
        return $this->belongsToMany(Program::class,'student_figh_program','student_id','program_id');
    }
    public function studentHasAnwar()
    {
        return $this->belongsToMany(Program::class,'student_anwar_program','student_id','program_id');
    }

    /*  Last Program */
    public function sundayheroLastProgram(){
        return Program::orderBy('id','desc')->where('program_tag','sundayhero')->first();
    }

    public function fiqhLastProgram(){
        return Program::orderBy('id','desc')->where('program_tag','fiqh')->first();
    }

    public function anwarLastProgram(){
        return Program::orderBy('id','desc')->where('program_tag','anwar')->first();
    }
    /*  Last Program */
    public function isHasAnwar(){
        $lastProgram = $this->anwarLastProgram();
        return (bool) DB::table('student_anwar_program')
        ->where(['student_id'=>$this->id,'program_id'=>$lastProgram->id])
        ->count();
    } 
    public function isHasFiqh(){
        $lastProgram = $this->fiqhLastProgram();
        return (bool) DB::table('student_figh_program')
        ->where(['student_id'=>$this->id,'program_id'=>$lastProgram->id])
        ->count();
    } 
    public function isHasSundayhero(){
        $lastProgram = $this->sundayheroLastProgram();
        return (bool) DB::table('student_sundayhero_program')
        ->where(['student_id'=>$this->id,'program_id'=>$lastProgram->id])
        ->count();
    }  

    public function studentHasMission()
    {
        return $this->belongsToMany(Mission::class,'student_has_mission','student_id','mission_id');
    }


}
