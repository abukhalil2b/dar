@extends('layouts.app')

@section('content')
<section class="body">
    <div class="container">
        <div class="row pt-3">
            <div class="col-lg-12">
                قائمة أسماء الطلاب المشاركين في برنامج
               [@if($lastProgram) 
                    @if($lastProgram->program_tag == 'anwar') انوار القرآن @endif
                    @if($lastProgram->program_tag == 'fiqh') المدرسة الفقهية @endif
                    @if($lastProgram->program_tag == 'sundayhero') ابطال الأحد @endif
                @else لايوجد برنامج مسجل  
                @endif] 
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-lg-12">
                <table class="table table-bordered">
                    <tr>
                        <td>اسم الطالب</td>
                        @if($lastProgram->program_tag == 'anwar')
                        <td> المستوى الذي فيه</td>
                        @endif
                    </tr>
                    @foreach($students as $student)
                    <tr>
                        <td>
                            {{$student->first_name}} {{$student->second_name}} {{$student->third_name}}
	                        <a class="edit-link"  
	                             href="{{route('admin.student.edit',['user_id'=>$student->id])}}"> <span class="edit-link">تعديل </span> 
	                         </a>
                        </td>
                        @if($lastProgram->program_tag == 'anwar')
                        <td>
                            @if($student->level!=null){{$student->level->name}}@endif
                            <a class="edit-link"  
                             href="{{route('admin.student.shift.create',['student_id'=>$student->id])}}"> <span class="edit-link"> نقل </span> 
                            </a>
                            <a class="edit-link"  
                             href="{{route('admin.student.report.index',['student_id'=>$student->id])}}"> <span class="edit-link">
                             المستوى العام للحفظ </span> 
                            </a>
                             
                        </td>
                        @endif
                    </tr>
                    @endforeach
                </table>
                
            </div>
        </div>

    </div><!--/container-->

@endsection

