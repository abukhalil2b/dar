@extends('layouts.app')

@section('content')

<section class="body">
    <div class="container">
       


    <form  action="{{route('program.store')}}" method="post">
        <div class="row pt-3 justify-content-center">
            @csrf
            <div class="col-lg-4">
                <div class="form-group">
                    @if($program_tag=='sundayhero')
                        <input placeholder="اسم البرنامج" name="name" value="أبطال الأحد" class="form-control" >
                    @endif
                    @if($program_tag=='anwar')
                        <input placeholder="اسم البرنامج" name="name" value="أنوار القرآن" class="form-control" >
                    @endif
                    @if($program_tag=='fiqh')
                        <input placeholder="اسم البرنامج" name="name" value="البرنامج الفقهي" class="form-control" >
                    @endif
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <input placeholder="الوصف" name="descr" class="form-control" >
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="form-group">
                    <input name="gender" type="hidden" value="male" >
                    <input name="program_tag" type="hidden" value="{{$program_tag}}" >
                    <input name="day" type="hidden" value="<?php echo date('d',time()); ?>" >
                    <input name="year" type="hidden" value="<?php echo substr(date('m-Y',time()),3); ?>" >
                    <input name="month" type="hidden" value="<?php echo substr(date('m-Y',time()),0,2); ?>" >
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
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>اسم البرنامج</th>
                            <th>الوصف</th>
                            <th>عدد الحضور</th>
                            <th>تعديل</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($programs as $program)
                        <tr>
                            <td><span class="program-name">{{$program->name}}</span></td>
                            <td><span class="program-descr">{{$program->descr}}</span></td>
                            <td><span>{{$program->students->count()}}</span></td>
                            <td>
                                <a class="edit-link" href="{{route('program.edit',['program_id'=>$program->id])}}"> تعديل  </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
               
            </div>
        </div>

    </div>
</section><!--/body-->

@endsection
