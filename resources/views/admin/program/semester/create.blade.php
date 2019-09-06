@extends('layouts.app')
@section('content')
<section class="body">
    <div class="container">

        <div class="row pt-3">
            <div class="col-lg-12">
                @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{$err}}
                    @endforeach
                </div>
                @endif
            </div>
        </div>

        <div class="row pt-3">
            <div class="col">
            <p>
                السنة والفصل الدراسي
            </p>
                <form action="{{route('admin.program.semester.store')}}" method="post">
                @csrf
                    <div class="form-group">
                        <input name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-block btn-primary" >حفظ</button>
                    </div>
                </form>
            </div>
        </div>

    </div><!--/container-->
@endsection
