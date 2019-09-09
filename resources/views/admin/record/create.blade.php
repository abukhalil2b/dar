@extends('layouts.app')
@section('content')
<section class="body">
    <div class="container">
        <div class="row pt-3">
            <div class="col-lg-12">
                @if(session('status'))
                <div class="alert alert-warning">
                        {{session('status')}}
                </div>
                @endif
            </div>
        </div>

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
                <table class="table table-bordered">
                    <tr>
                        <td>يوم</td>
                        <td>{{date('d',time())}}</td>
                        <td>شهر</td>
                        <td>{{date('m',time())}}</td>
                        <td>سنة</td>
                        <td>{{date('Y',time())}}</td>
                    </tr>
                </table>
                <form action="{{route('admin.record.store')}}" method="post">
                @csrf
                    <div class="form-group">
                        اختر البرنامج الذي تود فتح السجل له
                        <select name="program_tag" class="form-control">
                            <option value="anwar">انوار القران</option>
                            <option value="fiqh">المدرسة الفقهية</option>
                            <option value="sundayhero">ابطال الاحد</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input name="day" type="hidden" value="{{date('d',time())}}">
                        <input name="month" type="hidden" value="{{date('m',time())}}">
                        <input name="year" type="hidden" value="{{date('Y',time())}}">
                        <button class="btn btn-block btn-primary" >حفظ</button>
                    </div>
                </form>
            </div>
        </div>

    </div><!--/container-->
@endsection
