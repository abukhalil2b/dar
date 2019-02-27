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


        <div class="row pt-3">
            <div class="col-lg-12">
                <table class="table table-bordered">
                    <tr>
                        <td>اسم الطالب</td>
                        <td>اسم البرنامج</td>
                        <td> النقاط</td>
                    </tr>
                    @foreach($marks as $mark)
                    <tr>
                        <td>
                            {{$mark->student_name}}
                        </td>
                        <td>
                            {{$mark->program_name}}
                        </td>
                        <td>
                           {{$mark->total_point}}
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>

    </div><!--/container-->

@endsection
