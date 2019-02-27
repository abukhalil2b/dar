@extends('layouts.app')

@section('content')

<section class="body">

    <div class="container">
        <div class="row pt-3">
            <div class="col-lg-12">
                <span class="body-title-lg"> {{$student->first_name}} </span>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row pt-3 justify-content-center">
           <form action="{{route('admin.student.shift')}}" method="post">
            @csrf
               <div class="col-lg-12">
                    <div class="form-group">
                        المستوى
                        <select name="level_id" class="form-control" >
                            @foreach($levels as $level)
                            <option value="{{$level->id}}"> {{$level->name}} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="student_id" value="{{$student->id}}">
                        <button type="submit" class="btn btn-light-green"> حفظ </button>

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
