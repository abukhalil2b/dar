@extends('layouts.app')

@section('content')

<section class="body">
    <div class="container">
       
        <div class="row pt-3">
            <div class="col-lg-12">
                <span class="body-title-lg"> البرنامج الإسبوعي </span>
                <span class="body-title-sm muted"> مثال:أنوار القرآن الأول </span>
            </div>
        </div>

    <form  action="{{route('program.store')}}" method="post">
        <div class="row pt-3 justify-content-center">
            @csrf
            <div class="col-lg-12">
                <div class="form-group">
                    <input name="name" type="text" class="form-control" >
                </div>
                <div class="form-group" >
                    <select name="program_tag" class="form-control">
                        <option value="">حدد تصنيف البرنامج...</option>
                        <option value="anwar">انوار القرآن</option>
                        <option value="sunday_hero">ابطال الاحد</option>
                        <option value="fiqh">المدرسة الفقهية</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                   <button class="btn btn-light-green btn-100" type="submit">حفظ</button>
                </div>
            </div> 
            <div class="col-lg-12">
                @foreach($errors->all() as $err)
                    <p class="text-danger" > {{ $err }} </p>
                @endforeach
                <b class="text-success">{{session('status')}}</b> 
            </div>   
        </div>
    </form> 

        <div class="row pt-3">
            <div class="col-lg-12">
                <hr>
               @foreach($programs as $program)
                <div class="alert alert-success">
                    <center><b>{{$program->name}}</b></center>
                    
                    <a class="edit-link" href="{{route('program.edit',['program_id'=>$program->id])}}"> تعديل  </a>
                </div>
               @endforeach
            </div>
        </div>

    </div>
</section><!--/body-->

@endsection
