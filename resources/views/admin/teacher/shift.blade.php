@extends('layouts.app')

@section('content')

<section class="body">

    <div class="container">
        <div class="row pt-3">
            <div class="col-lg-12">
                <span class="body-title-lg"> المعلمون </span>
                <span class="body-title-sm"> {{$user->first_name}} </span>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row pt-3 justify-content-center">
           <form action="{{route('admin.teacher.shift')}}" method="post">
            @csrf
               <div class="col-lg-6">
                    <div class="form-group">
                        المستوى
                        <select name="level_id" class="form-control" style="min-width: 150px;">
                            <option value="1">المستوى الاول</option>
                            <option value="2">المستوى الثاني</option>
                            <option value="3">المستوى الثالث</option>
                            <option value="5">المستوى الرابع</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="user_id" value="{{$user->id}}">
                        <button type="submit" class="btn btn-light-green"> حفظ </button>
                        <hr>
                        <a href="{{route('welcome')}}" class="btn btn-light-green" >القائمة</a>
                        @foreach($errors->all() as $err)
                            <p class="text-danger">{{$err}}</p>
                        @endforeach
                        <b>
                            <p class="text-success">{{session('status')}}</p>
                        </b>
                        
                        
                    </div>
                </div>
               
           </form>
        </div>
    </div>

   
</section><!--/body-->


@endsection
