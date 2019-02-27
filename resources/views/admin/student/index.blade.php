@extends('layouts.app')

@section('content')
<section class="body">
    <div class="container">
        <div class="row pt-3">
            <div class="col-lg-12">
               <span id="js-btn-show-form" class="btn btn-light-green btn-block" >طالب جديد</span> 
            </div>
        </div>
        
        <div class="row pt-3">
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

            
        <form action="{{route('admin.student.store')}}" method="post" id="js-hidden-form" style="display: none;">
            @csrf
                <div class="row justify-content-center pt-3">
                    <div class="col-lg-3 col-md-12 ">
                        <div class="form-group">
                        الاسم الاول
                            <input name="first_name" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 ">
                        <div class="form-group">
                        الاسم الثاني
                            <input name="second_name" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 ">
                        <div class="form-group">
                        الاسم الثالث
                            <input name="third_name" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 ">
                        <div class="form-group">
                        القبيلة
                            <input name="last_name" type="text" class="form-control" >
                        </div> 
                    </div>
                     <div class="col-lg-3 col-md-12 ">
                        <div class="form-group">
                        ملاحظات عامة
                            <input name="note" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 ">
                        <div class="form-group">
                        الهاتف
                            <input name="mobile" type="number" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 ">
                        <div class="form-group">
                        العمر
                            <input name="age" type="number" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 ">
                        <div class="form-group">
                        الصف 
                            <input name="started_at_grade" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 ">
                        <div class="form-group">
                        رقم البطاقة الشخصية
                            <input name="national_id" type="number" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 ">
                        <div class="form-group">
                        الصف الحالي
                            <input name="grade" class="form-control">
                        </div>
                    </div>
                   
                    <div class="col-lg-3 col-md-12 ">
                        <div class="form-group">
                        السكن
                            <select class="form-control" name="state_id">
                                @foreach($states as $state)
                                <option value="{{$state->id}}"> {{$state->name}} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 ">
                        <div class="form-group">
                        الجنس
                            <select name="gender" class="form-control">
                                <option value="m">ذكر</option>
                                <option value="f">انثى</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 ">
                        <div class="form-group">
                        الشخص الذي يتابعه في البيت
                            <select class="form-control" name="parent_follow_up">
                                <option value="father">الاب</option>
                                <option value="mother">الأم</option>
                                <option value="other"> شخص آخر</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 ">
                        <div class="form-group">
                        تم تحديد مستواه في
                            <select class="form-control" name="level_id">
                                @foreach($levels as $level)
                                <option value="{{$level->id}}"> {{$level->name}} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>                    

                    <div class="col-lg-3 col-md-12 ">
                        <div class="form-group">
                            <button class="btn btn-light-green btn-margin " type="submit">حفظ</button>  
                        </div>
                    </div>
                    
                </div>
        </form>

    <hr>
        <span class="body-title-lg"> قائمة الطلاب </span>
        <form action="{{route('admin.student.search')}}" method="post">
            @csrf
            <div class="row pt-5 justify-content-center" >
                <div class="col-md-5 ">
                    <input name="search" class="form-control " >
                </div>
                <div class="col-md-2 ">
                    <button  type="submit" class="btn btn-light-green"> بحث </button>

                </div>
            </div>            
        </form>


        <div class="row pt-3">
            <div class="col-lg-12">
                <table class="table table-bordered">
                    <tr>
                        <td>الصورة</td>
                        <td>اسم الطالب</td>
                        <td> المستوى الذي فيه</td>
                    </tr>

                    @foreach($students as $student)
                    <tr>
                        <td>
                            <a href="{{route('admin.avatar.create',['student_id'=>$student->id])}}">
                                <img src="{{url('/').$student->getFirstMediaUrl('avatars')}}"  style="border-radius: 50%; height: 50px;width: 50px;">
                            </a>

                        </td>
                        <td>
                            
                            {{$student->first_name}} {{$student->second_name}} {{$student->third_name}}
                            <a class="edit-link"  
                             href="{{route('admin.student.edit',['user_id'=>$student->id])}}"> <span class="edit-link">تعديل </span> </a>
                        </td>
                        <td>
                            @if($student->level!=null){{$student->level->name}}@endif
                            <a class="edit-link"  
                             href="{{route('admin.student.shift.create',['student_id'=>$student->id])}}"> <span class="edit-link"> نقل </span> </a>
                        </td>
                        
                    </tr>
                    @endforeach
                </table>
                
            </div>
        </div>

    </div><!--/container-->

@endsection

@section('javascript')
<script>
   $(document).ready(function(){
        
        $('#js-btn-show-form').on('click',function(){
            $('#js-hidden-form').show(200)
            $('#js-btn-show-form').hide()
        })
   })
</script>
@endsection