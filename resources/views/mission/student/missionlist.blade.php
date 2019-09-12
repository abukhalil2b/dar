@extends('layouts.app')
@section('content')
<div class="body">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                {{$student->first_name}} {{$student->second_name}} {{$student->third_name}} {{$student->last_name}} 
            </div>
        </div>
        <div class="row">
            @foreach($studentMissions as $studentMission)
                <div class="col-lg-3">
                  <div class="card ">
                    <div class="card-body card-body-img-container">
                        <a href="{{route('mission.juzlist',['student_id'=>$student->id])}}">
                        الجزء {{$studentMission->mission_number}}
                        </a>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('mission.delete',['mission_id'=>$studentMission->id])}}">
                        حذف
                        </a>
                    </div>  
                  </div>
                </div> 
            @endforeach
        </div>
    </div> 
</div> 
@endsection

