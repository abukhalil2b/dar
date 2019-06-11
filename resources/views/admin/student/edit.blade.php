@extends('layouts.app')

@section('content')

<section class="body">

        <div class="container">
            <div class="row pt-3">
                
            </div>
            <form action="{{route('admin.student.update')}}" method="post">
                @csrf
                <div class="row justify-content-center pt-3">


                    <div class="col-lg-3 col-md-12 ">
                        <div class="form-group">
                        الاسم الاول
                            <input name="first_name" type="text" class="form-control" value="{{$student->first_name}}"  >
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 ">
                        <div class="form-group">
                        الاسم الثاني
                            <input name="second_name" type="text" class="form-control" value="{{$student->second_name}}"  >
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 ">
                        <div class="form-group">
                        الاسم الثالث
                            <input name="third_name" type="text" class="form-control"  value="{{$student->third_name}}"  >
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 ">
                        <div class="form-group">
                        القبيلة
                            <input name="last_name" type="text" class="form-control" value="{{$student->last_name}}"  >
                        </div> 
                    </div>
                     <div class="col-lg-3 col-md-12 ">
                        <div class="form-group">
                        ملاحظات عامة
                            <input name="note" class="form-control" value="{{$student->note}}" >
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 ">
                        <div class="form-group">
                        الهاتف
                            <input name="mobile" type="number" class="form-control" value="{{$student->mobile}}" >
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 ">
                        <div class="form-group">
                        العمر
                            <input name="age" class="form-control" value="{{$student->age}}">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 ">
                        <div class="form-group">
                        الصف 
                            <input name="started_at_grade" class="form-control" value="{{$student->started_at_grade}}" >
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 ">
                        <div class="form-group">
                        رقم البطاقة الشخصية
                            <input name="national_id" class="form-control" value="{{$student->national_id}}" >
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 ">
                        <div class="form-group">
                        الصف الحالي
                            <input name="grade" class="form-control" value="{{$student->grade}}" >
                        </div>
                    </div>
                   
                    <div class="col-lg-3 col-md-12 ">
                        <div class="form-group">
                        السكن
                            <select class="form-control" name="state_id">
                                @foreach($states as $state)
                                <option {{$state->id==$student->state_id?'selected':''}} value="{{$state->id}}"> {{$state->name}} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 ">
                        <div class="form-group">
                        الجنس
                            <select class="form-control" name="gender">
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
                                                
                        
                    <div class="col-lg-3">
                        <div class="form-group ">
                            <input type="hidden" name="student_id" value="{{$student->id}}" >
                            <button type="submit" class="btn btn-light-green btn-margin" > تحديث </button>
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
