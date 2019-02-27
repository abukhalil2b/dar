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
            </div>
        </div>

        <div class="row pt-3">
            <div class="col-lg-12">
                
                <table class="table table-bordered">
                    <tr>
                        <td>اسم البرنامج</td>
                        <td>اختر</td>
                    </tr>
                    <form action="{{route('admin.student.mark.search.in.other.programs')}}" method="post">
                    @csrf
                    @foreach($Programs as $Program)
                    <tr>
                        <td>
                            {{$Program->name}}
                        </td>
                         <td>
                            <input type="checkbox" name="programs[]" value="{{$Program->id}}">
                        </td>
                    
                    @endforeach
                    <tr>
                        <td colspan="2">
                            <button class="btn btn-light-green" type="submit">بحث</button>
                        </td>
                    </tr>
                    </form>
                </table>
            </div>
        </div>

    </div><!--/container-->

@endsection
