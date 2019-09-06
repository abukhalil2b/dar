@extends('layouts.app')

@section('content')
<section class="body">
    <div class="container">
    
<p>الفصل:[ {{$lastProgramSemester->name}} ]</p>
        <div class="row pt-3">
            <div class="col-lg-6">
                <table class="table table-bordered">
                    <tr>
                        <td> الطالب المشارك في هذا الفصل</td>
                    </tr>

                    @foreach($inStudents as $inStudent)
                    <tr>
                        <td>
                            {{$inStudent->id}} -
                            {{$inStudent->first_name}}
                            {{$inStudent->second_name}} 
                            {{$inStudent->third_name}} 
                            {{$inStudent->last_name}} 
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>

            <div class="col-lg-6">
                        <form action="{{route('admin.student.semester.subscribe')}}" method="post">
                        @csrf
                <table class="table table-bordered">
                    <tr>
                        <td>الطالب الذي لم يشارك في هذا الفصل</td>
                        <td>
                        @if(count($outStudents)>0)
                            <button class="btn-mainmenu btn-sm btn btn-light-green" >اشتراك</button>
                        @endif
                            <input type="hidden" name="lastsemesterid" value="{{$lastProgramSemester->id}}">
                        </td>
                    </tr>

                    @foreach($outStudents as $outStudent)
                    <tr>
                        <td>
                            {{$outStudent->id}} -
                            {{$outStudent->first_name}}
                            {{$outStudent->second_name}} 
                            {{$outStudent->third_name}} 
                            {{$outStudent->last_name}} 
                        </td>
                        <td>
                            <input name="subscriber[]" value="{{$outStudent->id}}" type="checkbox">
                        </td>
                    </tr>
                    @endforeach
                </table>
                        </form>
            </div>

        </div>

    </div><!--/container-->

@endsection
