@extends('layouts.app')

@section('content')
<section class="body">
    <div class="container">
        <div class="row ">
            <div class="col-lg-12">

                
                <span class="body-title-lg">  عدد الطلاب  في برنامج 
                    [@if($lastRecord) 
                        @if($lastRecord->program_tag == 'anwar') انوار القرآن @endif
                        @if($lastRecord->program_tag == 'fiqh') المدرسة الفقهية @endif
                        @if($lastRecord->program_tag == 'sundayhero') ابطال الأحد @endif
                    @else لايوجد برنامج مسجل  
                    @endif] 
                </span>
                <span class="badge badge-secondary">{{$students->count()}}</span>
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
                        <a href="{{route('teacher.present.create',
                        ['student_id'=>$student->student_id,'present_id'=>$student->present_id])}}" class="btn-block">
                            {{$student->student_id}}-{{$student->first_name}} {{$student->last_name}}
                        </a>
                        </td>
                        <td>
                            {{$student->present?'حاضر':'غائب'}}
                        </td>
                    </tr>   
                    @endforeach
                </table>
            </div>
        </div>

    </div>
</section><!--/body-->


@endsection
