@extends('layouts.app')

@section('content')

<section class="body">
    <div class="container">
        <div class="row pt-3">
            <div class="col-lg-12">
                <span class="body-title-lg"> البرنامج الإسبوعي </span>
                <span class="body-title-sm muted"> تعديل </span>
            </div>
        </div>

        <div class="row pt-3 justify-content-center">
            <form  action="{{route('program.update')}}" method="post">
                @csrf
                <div class="col-lg-12" >
                    <div class="form-group">
                        <input name="name" type="text" class="form-control input-300" value="{{$program->name}}">
                    </div>
                    @foreach($errors->all() as $err)
                        <p class="text-danger" > {{ $err }} </p>
                    @endforeach
                    <b class="text-success">{{session('status')}}</b>  
                    <input type="hidden" name="program_id" value="{{$program->id}}">  
                    <button class="btn btn-light-green btn-100" type="submit">حفظ</button>
                    <hr>
                    <a  href="{{route('welcome')}}" class="btn btn-light-green btn-100" >القائمة</a>
                </div>
            </form>
        </div>
        

    </div>
</section><!--/body-->

@endsection
