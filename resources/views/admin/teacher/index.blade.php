@extends('layouts.app')

@section('content')

<section class="body">
        <div class="container">
            <div class="row pt-3">
                <div class="col-lg-6 col-sm-12">
                   <span id="js-btn-show-form" class="btn btn-light-green" >اضافة مدرس</span> 
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
                            <p>{{$err}}</p>
                        @endforeach
                    </div>
                    @endif
                </div>
            </div> 

            <form action="{{route('admin.teacher.store')}}" method="post" id="js-hidden-form" 
            style="display: none;">
                @csrf
                <div class="row justify-content-center pt-3">
                            <div class="col-lg-2">
                                <div class="form-group ">
                                الجنس
                                <select name="gender" class="form-control">
                                    <option value="m">ذكر</option>
                                    <option value="f">انثى</option>
                                </select>
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="form-group ">
                                   الجنسية
                                    <input name="nationality"  class="form-control body-login-input"
                                     >
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="form-group ">
                                   الرقم المدني للعمانين
                                    <input name="nationality_id" type="number" class="form-control body-login-input"
                                     >
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="form-group ">
                                   الجواز لغير العمانيين
                                    <input name="passport_id" type="number"  class="form-control body-login-input"
                                     >
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="form-group ">
                                    السكن
                                    <select name="city_id" class="form-control">
                                        @foreach($cities as $city)
                                        <option value="{{$city->id}}"> {{$city->name}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="form-group ">
                                    البلدة
                                    <input name="village"  class="form-control body-login-input"
                                     >
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="form-group ">
                                    المستوى
                                    <select name="level_id" class="form-control">
                                        @foreach($levels as $level)
                                        <option value="{{$level->id}}"> {{$level->name}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="form-group ">
                                    الاسم الاول
                                    <input name="first_name"  class="form-control body-login-input"
                                     >
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="form-group ">
                                    الاسم الثاني
                                    <input name="second_name"  class="form-control body-login-input"
                                     >
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="form-group ">
                                   الاسم الثالث
                                    <input name="third_name"  class="form-control body-login-input"
                                     >
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="form-group ">
                                    القبيلة
                                    <input name="last_name"  class="form-control body-login-input"
                                     >
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="form-group ">
                                    البريد الالكتروني
                                    <input name="email" type="text"  class="form-control body-login-input"
                                     >
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="form-group ">
                                    كلمة المرور
                                    <input name="password"  type="text"  
                                    class="form-control body-login-input" >
                                </div>
                            </div>
                            
                            <div class="col-lg-3">
                                <div class="form-group ">
                                   الهاتف
                                    <input name="mobile"  type="number"  
                                    class="form-control body-login-input" >
                                </div>
                            </div>
                            
                            <div class="col-lg-3">
                                <div class="form-group ">
                                راتب المدرس
                                   <select name="teacher_type" class="form-control">
                                        <option value="school_paid">مكافأة من المدرسة</option>
                                        <option value="minister_paid">مكافأة من الوزارة</option>
                                        <option value="officially">رسمي من الوزارة</option>
                                        <option value="volunteer">متطوع</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-lg-3">
                                <div class="form-group ">
                                الحالة
                                   <select name="teacher_id" class="form-control">
                                        <option value="1">مفعل</option>
                                        <option value="0">غير مفعل</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group ">
                                   الملاحظة
                                    <input name="note"
                                    class="form-control body-login-input" >
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group ">
                                    <input type="hidden" value="teacher" name="user_type">
                                    <button type="submit" class="btn btn-light-green" > تسجيل جديد </button>
                                </div>
                            </div>
                            
                        
                            
                </div>              
            </form>
            
        </div><!-- /container -->

    <div class="container">
       
        <div class="row pt-3">
            <div class="col-lg-12">

                <table class="table table-bordered">
                    <tr>
                        <td> الاسم </td>
                    </tr>
                    @foreach($teachers as $teacher)
                    <tr>
                        <td>
<a class="teacher-edit-link" href="{{route('admin.teacher.details',['user_id'=>$teacher->id])}}">
                            {{$teacher->first_name}}
                            {{$teacher->second_name}}
                            {{$teacher->third_name}}
                            {{$teacher->last_name}}
                             </a>
                        </td>
                    </tr>
                    @endforeach   
                </table>
               
            </div>
        </div>

    </div>
</section><!--/body-->

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