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
                <a  href="{{route('admin.record.create')}}" class="btn-mainmenu btn-sm btn btn-light-green" >افتح سجل جديد</a>
                
                <table class="table table-bordered">
                    <tr>
                        <td>سجل البرامج</td>
                    </tr>
                    @foreach($records as $record)
                    <tr>
                        <td>
                            [{{$record->id}}]  {{$record->day}} - {{$record->month}} - {{$record->year}} - 
                            @if($record->program_tag == 'anwar') انوار القرآن @endif
                            @if($record->program_tag == 'fiqh') المدرسة الفقهية @endif
                            @if($record->program_tag == 'sundayhero') ابطال الأحد @endif
                           
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>

    </div><!--/container-->

@endsection
