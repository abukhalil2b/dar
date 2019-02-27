@extends('layouts.app')

@section('content')
<section class="body">
    <div class="container">
        
        
        <div class="row pt-3">
            <div class="col-lg-12">
                <table class="table table-bordered">
                    <tr>
                        <td>اسم الطالب</td>
                        <td>الملاحظة</td>
                        <td>التعليقات الإدارية</td>
                    </tr>

                    <tr>
                        <td>
                            {{$warning->student->first_name}}
                        </td>
                        <td>
                            {{$warning->note}}
                            
                        </td>
                        <td>
                            <form action="{{route('admin.warning.update')}}" method="post">
                                @csrf
                                <input class="form-control" value="{{$warning->comment}}" name="comment">
                                <input type="hidden" value="{{$warning->id}}" name="warning_id">
                                <br>
                                <button type="submit" class="btn btn-block">حفظ</button>
                            </form>
                        </td>
                        
                    </tr>
                </table>
            </div>
        </div>

    </div><!--/container-->

@endsection

