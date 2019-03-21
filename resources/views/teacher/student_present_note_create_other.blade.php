@extends('layouts.app')

@section('content')
<section class="body">
    <div class="container">
        <div class="row ">
            <div class="col-lg-12">
                <span class="body-title-lg">
                    {{$student->first_name}} {{$student->last_name}}
                </span>
                <span class="body-title-sm text-danger">{{$msg}}</span>
            </div>
        </div>
        <div class="row ">
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

        <div class="row">
            <div class="col-lg-12">
                <form action="{{route('teacher.writedownnotes.store.other')}}" method="post">
                    @csrf
                    <table class="table">
                        <tr>
                            <td>الحضور</td>
                            <td>
                                <img src="{{asset('img/tick.png')}}" width="25">
                            </td>
                            <td>وقت الحضور</td>
                            <td>
                                <input type="time" name="present_time">
                            </td>
                        </tr>
                        
                        <tr>
                            <td> الدشداشة البيضاء </td>
                            <td>
                                <input type="checkbox" checked="checked" value="1" name="white_dishdash">    
                            </td>
                            <td> المصر الابيض </td>
                            <td>
                                <input type="checkbox" checked="checked" value="1" name="white_mosar">    
                            </td>
                        </tr>
                        <tr>
                            <td> غير مسبل </td>
                            <td>
                                <input type="checkbox" checked="checked" value="1" name="not_mosbil">    
                            </td>
                            <td> ملاحظات اخرى </td>
                            <td>
                                <input type="text" name="other_note" class="form-control">    
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <input type="hidden" value="{{Auth::user()->id}}" name="user_id">
                                <input type="hidden" value="{{$student->id}}" name="student_id">
                                <input type="hidden" value="{{$lastProgram->id}}" name="program_id">
                                <input type="hidden" value="anwar" name="program_tag">
                                <button type="submit" class="btn btn-light-green"> تسجيل الحضور   </button>
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
