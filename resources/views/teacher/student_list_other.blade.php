@extends('layouts.app')

@section('content')
<section class="body">
    <div class="container">
        <div class="row ">
            <div class="col-lg-12">

                
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
                <h4>البرامج الأخرى</h4>
                @if(App\Program::orderBy('id','desc')->first()!=null)
                [{{App\Program::orderBy('id','desc')->first()->name}}]
                @endif
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

                                <a href="{{route('teacher.show.student.other',['student_id'=>$student->id])}}">
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
