@extends('layouts.app')

@section('content')

<section class="body">

    <div class="container">
       
        <div class="row pt-3">
            <div class="col-lg-12">

                <table class="table table-bordered">
                    <tr>
                        <td>الاسم الأول</td>
                        <td>
                            {{$teacher->first_name}} 
                        </td>
                    </tr>
                    <tr>
                        <td> الاسم الثاني </td>
                        <td>
                            {{$teacher->second_name}} 
                        </td>
                    </tr>
                    <tr>
                        <td>الاسم الثالث</td>
                        <td>
                            {{$teacher->third_name}} 
                        </td>
                    </tr>
                    <tr>
                        <td> القبيلة </td>
                        <td>
                            {{$teacher->last_name}} 
                        </td>
                    </tr>
                    <tr>
                        <td> الجنس </td>
                        <td>
                            {{$teacher->gender}} 
                        </td>
                    </tr>
                    <tr>
                        <td> الجنسية </td>
                        <td>
                            {{$teacher->nationality}} 
                        </td>
                    </tr>
                    <tr>
                        <td> الجواز لغير العمانيين </td>
                        <td>
                            {{$teacher->passport_id}} 
                        </td>
                    </tr>
                    <tr>
                        <td> البطاقة الشخصية للعمانيين </td>
                        <td>
                            {{$teacher->nationality_id}} 
                        </td>
                    </tr>
                    <tr>
                        <td> الايميل </td>
                        <td>
                            {{$teacher->email}} 
                        </td>
                    </tr>
                    <tr>
                        <td> الرقم السري </td>
                        <td>
                            {{$teacher->plain_password}} 
                        </td>
                    </tr>
                    <tr>
                        <td>  المستوى الذي يدرس فيه </td>
                        <td>
                            @if($teacher->level!=null){{$teacher->level->name}}@endif
                            <a class="teacher-edit-link" 
                             href="{{route('admin.teacher.shift.create',['user_id'=>$teacher->id])}}">نقل </a>
                        </td>
                    </tr>
                    <tr>
                        <td> عدد الطلاب </td>
                        <td>
                             @if($teacher->level!=null){{$teacher->level->students->count()}}@endif
                        </td>
                    </tr>
                    <tr>
                        <td> الملاحظة </td>
                        <td>
                            {{$teacher->note}} 
                        </td>
                    </tr>
                </table>
               
            </div>
        </div>

    </div>
</section><!--/body-->

@endsection
