@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <table class="table">
                    <tr>
                        <td>اليوم</td>
                        <td>الشهر</td>
                        <td>رقم واسم الطالب</td>
                        <td>الصفحة</td>
                        <td> الجزء </td>
                        <td>هل انهى</td>
                    </tr>
                    @foreach($missions as $mission)
                    <tr>
                        <td>{{$mission->day}}</td>
                        <td>{{$mission->month}}</td>
                        <td>{{$mission->student_id}}-{{$mission->first_name}} {{$mission->last_name}}</td>
                        <td>{{$mission->mission_id}}</td>
                        <td>الجزء {{$mission->mission_number}}</td>
                        <td>{{$mission->done?'نعم':''}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
