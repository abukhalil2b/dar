@extends('layouts.app')

@section('content')

<section class="body">

        <div class="container">
            
            <form action="{{route('admin.teacher.update')}}" method="post">
                @csrf
                <div class="row justify-content-center pt-3">
                            <div class="col-lg-2">
                                <div class="form-group ">
                                الجنس
                                <select name="gender" class="form-control">
                                    <option value="male">ذكر</option>
                                    <option value="female">انثى</option>
                                </select>
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="form-group ">
                                    السكن
                                    <select name="state_id" class="form-control">
                                        @foreach($states as $state)
                                        <option value="{{$state->id}}"> {{$state->name}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="col-lg-3">
                                <div class="form-group ">
                                    الاسم الاول
                                    <input name="first_name" value="{{$teacher->first_name}}"  class="form-control body-login-input"
                                     >
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="form-group ">
                                    الاسم الثاني
                                    <input name="second_name" value="{{$teacher->second_name}}"  class="form-control body-login-input"
                                     >
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="form-group ">
                                   الاسم الثالث
                                    <input name="third_name" value="{{$teacher->third_name}}"  class="form-control body-login-input"
                                     >
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="form-group ">
                                    القبيلة
                                    <input name="last_name" value="{{$teacher->last_name}}"  class="form-control body-login-input"
                                     >
                                </div>
                            </div>


                            <div class="col-lg-3">
                                <div class="form-group ">
                                    كلمة المرور
                                    <input name="password"  type="password"  
                                    class="form-control body-login-input" >
                                </div>
                            </div>
                        
                            <div class="col-lg-3">
                                <div class="form-group ">
                                   الهاتف
                                    <input name="mobile"
                                    value="{{$teacher->mobile}}"  type="number"  
                                    class="form-control body-login-input" >
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="form-group ">
                                    <input type="hidden" value="{{$teacher->id}}" name="teacher_id" >
                                    <button type="submit" class="btn btn-light-green" > تحديث </button>
                                </div>
                            </div>
                            
                        
                            
                </div>              
            </form>

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
            
        </div>



    </div>
</section><!--/body-->


@endsection
