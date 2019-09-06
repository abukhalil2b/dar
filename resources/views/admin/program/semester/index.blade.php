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
                        <td>الفصل</td>
                    </tr>
                    @foreach($semesters as $semester)
                    <tr>
                        <td>
                            {{$semester->id}} -
                            {{$semester->name}}
                        </td>
                    </tr>
                    @endforeach
                </table>
                <a  href="{{route('admin.program.semester.create')}}" class="btn-mainmenu btn-sm btn btn-light-green" >اضف جديد</a>
            </div>
        </div>

    </div><!--/container-->

@endsection
