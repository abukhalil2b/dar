@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <table class="table">
                    <tr>
                        <td>
                        {{$student->first_name}} {{$student->second_name}}
                        {{$student->third_name}} {{$student->last_name}}
                        </td>
                    </tr>
                    <tr>
                        <td>اليوم</td>
                        <td>الشهر</td>
                        <td>السنة</td>
                        <td>الصفحة</td>
                        <td> الجزء </td>
                        <td>هل انهى</td>
                    </tr>
                    @foreach($missions as $mission)
                    <tr>
                        <td>{{$mission->day}}</td>
                        <td>{{$mission->month}}</td>
                        <td>{{$mission->year}}</td>
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
