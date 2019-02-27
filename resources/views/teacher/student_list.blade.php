@extends('layouts.app')

@section('content')
<section class="body">
    <div class="container">
        <div class="row ">
            <div class="col-lg-12">

                    <a  href="{{route('welcome')}}" class="btn btn-light-green btn-margin" >القائمة</a>
                    <hr>
                <span class="body-title-lg">  قائمة الطلاب  </span>
                <span class="body-title-sm ">
                    العدد
                    <span class="badge badge-secondary">{{$students->count()}}</span>
                </span>
            </div>
        </div>
        <div class="row ">
            <div class="col-lg-12">
                @if(session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
                 @endif   
                @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{$err}}
                    @endforeach
                </div>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                    <table class="table table-bordered">
                       
                        @foreach($students as $student)
                        <tr>
                            <td>
                                {{$student->id}}
                            </td>
                            <td>
                                {{$student->first_name}} {{$student->last_name}}
                            </td>
                            <td>

                                <a href="{{route('teacher.show.student',['student_id'=>$student->id])}}">
                                   <img src="{{asset('img/search.png')}}" width="40"> 
                                </a>
                                 الحضور
                                 @foreach($student->programs as $program)
                                    @if($program->present==1)
                                        <img src="{{asset('img/tick.png')}}" width="25">
                                    @endif
                                 @endforeach
                                 
                            </td>
                            <td>
                                <a href="{{route('student.report.create',['student_id'=>$student->id])}}">
                                   <img src="{{asset('img/note.png')}}" width="40">  
                                </a>
                                الحفظ
                            </td>
                            <td>
                                <a href="">
                                   <img src="{{asset('img/awards.png')}}" width="30">  
                                </a>
                                عدد الأجزاء المحفوظة
                            </td>
                            <td>
                                <a href="{{route('student.warning.create',['student_id'=>$student->id])}}">
                                   <img src="{{asset('img/mon.png')}}" width="40">  
                                </a>
                                الملاحظات
                            </td>
                        </tr>
                        @endforeach
                        
                    </table>

            </div>
        </div>

    </div>
</section><!--/body-->


@endsection
