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
                <span class="body-title-sm text-danger">{{$msg}}</span>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">
                <form action="{{route('student.report.store')}}" method="post">
                    @csrf
                    <table class="table">
                        <tr>
                            <td>
                                المحفوظ السابق
                            </td>
                            <td>
                                @if($lastReport!=null)
                                {{$lastReport->sora_name}} من{{$lastReport->aya_from}}   الى{{$lastReport->aya_to}}
                                @endif
                            </td>
                            <td>
                                <span class="body-title-sm">الحفظ الحالي</span>
                            </td>
                            <td>
                                السورة
                                <select name="sora_id" class="form-control">
                                    @foreach($soras as $sora)
                                    <option value="{{$sora->id}}"> {{$sora->name}} </option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>من الآية</td>
                            <td>
                                <input type="number" name="aya_from" class="form-control">
                            </td>
                                <td>الى الآية</td>
                            <td>
                                <input type="number" name="aya_to" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                حفظ السورة كاملة
                            </td>
                            <td colspan="3">
                                <input type="checkbox" name="present_time">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <input type="hidden" value="{{Auth::user()->id}}" name="user_id">
                                <input type="hidden" value="{{$student->id}}" name="student_id">
                                <input type="hidden" value="{{$lastProgram->id}}" name="program_id">
                                <button type="submit" class="btn btn-light-green"> حفظ   </button>
                                <a  class="btn btn-light-green float-left" href="{{route('teacher.studentlist')}}">الطلاب</a>
                            </td>
                        </tr>
                    </table>

                </form>
            </div>
        </div>

    </div>
</section><!--/body-->


@endsection
