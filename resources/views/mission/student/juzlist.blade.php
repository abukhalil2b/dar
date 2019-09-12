@extends('layouts.app')
@section('content')
<div class="body">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <form id="form">
                @csrf
                <table class=" table-bordered table-juz">
                    <tr>
                        <td>الصفحة</td>
                        <td>السورة</td>
                        <td>منجزة بتاريخ </td>
                    </tr>
                    @foreach($studentHasMissions as $mission)
                    <tr>
                        <td>{{$mission->page}}</td>
                        <td>{{$mission->descr}}</td>
                        
                        <td>
                            @if($mission->done==1)
                            {{$mission->day}}/{{$mission->month}}/{{$mission->year}}
                            @else
                            <a href="{{route('mission.save',['id'=>$mission->id])}}" class="btn-done">تم</a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </table>
                </form>    
            </div>

        </div>
    </div> 
</div> 
@endsection
@section('javascript')
<script>
	$(document).ready(function(){
		
	})
</script>
@endsection
