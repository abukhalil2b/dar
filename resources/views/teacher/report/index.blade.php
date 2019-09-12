@extends('layouts.app')

@section('content')
<section class="body">
    <div class="container">

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
           
        <div class="row ">
            <div class="col-lg-12">
                <span class="body-title-lg">
                {{$student->id}} - {{$student->first_name}} {{$student->last_name}}
                </span>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">

            </div>
        </div>

    </div>
</section><!--/body-->


@endsection
