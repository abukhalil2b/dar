@extends('layouts.app')
@section('content')
    <style>
        .green{
            background-color: #418b8b;
            font-weight: bold;
            text-align: center;
            color: #fff;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-6">
                <form action="{{route('mission.store')}}" method="post">
                @csrf
                <table class=" table-bordered table-juz">
                    <tr>
                        <td colspan="2">الجزء {{$missions1[0]->in_juz}}</td>
                    </tr>
                    <tr>
                        <td>الصفحة</td> 
                        <td>السورة</td>
                    </tr>
                    @if(count($studentMission)>0 && $studentMission[0]['mission_number']==$missions1[0]->in_juz)
                    <tr>
                        <td colspan="2" class="green"> تم </td>
                    </tr>
                    @else
                    @foreach($missions1 as $mission)
                    <tr>
                        <td>{{$mission->page}}</td>
                        <td>{{$mission->descr}}</td>
                        <input type="hidden" name="pages[]" value="{{$mission->page}}">
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="student_id" value="{{$student_id}}">
                            <input type="hidden" name="mission_number" value="1">
                            <button type="submit" class="btn-light-green">اختر</button>
                        </td>
                    </tr>
                    @endif
                </table>
                </form>    
            </div>
            <div class="col-lg-3 col-6">
                <form action="{{route('mission.store')}}" method="post">
                @csrf
                <table class=" table-bordered table-juz">
                    <tr>
                        <td colspan="2">الجزء {{$missions2[0]->in_juz}}</td>
                    </tr>
                    <tr>
                        <td>الصفحة</td> 
                        <td>السورة</td>
                    </tr>
                    @if(count($studentMission)>0 && $studentMission[0]['mission_number']==$missions2[0]->in_juz)
                    <tr>
                        <td colspan="2" class="green"> تم </td>
                    </tr>
                    @else
                    @foreach($missions2 as $mission)
                    <tr>
                        <td>{{$mission->page}}</td>
                        <td>{{$mission->descr}}</td>
                        <input type="hidden" name="pages[]" value="{{$mission->page}}">
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="student_id" value="{{$student_id}}">
                            <input type="hidden" name="mission_number" value="2">
                            <button type="submit" class="btn-light-green">اختر</button>
                        </td>
                    </tr>
                    @endif
                </table>
                </form>    
            </div>
            <div class="col-lg-3 col-6">
                <form action="{{route('mission.store')}}" method="post">
                @csrf
                <table class=" table-bordered table-juz">
                    <tr>
                        <td colspan="2">الجزء {{$missions3[0]->in_juz}}</td>
                    </tr>
                    <tr>
                        <td>الصفحة</td> 
                        <td>السورة</td>
                    </tr>
                    @if(count($studentMission)>0 && $studentMission[0]['mission_number']==$missions3[0]->in_juz)
                    <tr>
                        <td colspan="2" class="green"> تم </td>
                    </tr>
                    @else
                    @foreach($missions3 as $mission)
                    <tr>
                        <td>{{$mission->page}}</td>
                        <td>{{$mission->descr}}</td>
                        <input type="hidden" name="pages[]" value="{{$mission->page}}">
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="student_id" value="{{$student_id}}">
                            <input type="hidden" name="mission_number" value="3">
                            <button type="submit" class="btn-light-green">اختر</button>
                        </td>
                    </tr>
                    @endif
                </table>
                </form>    
            </div>
            <div class="col-lg-3 col-6">
                <form action="{{route('mission.store')}}" method="post">
                @csrf
                <table class=" table-bordered table-juz">
                    <tr>
                        <td colspan="2">الجزء {{$missions4[0]->in_juz}}</td>
                    </tr>
                    <tr>
                        <td>الصفحة</td> 
                        <td>السورة</td>
                    </tr>
                    @if(count($studentMission)>0 && $studentMission[0]['mission_number']==$missions4[0]->in_juz)
                    <tr>
                        <td colspan="2" class="green"> تم </td>
                    </tr>
                    @else
                    @foreach($missions4 as $mission)
                    <tr>
                        <td>{{$mission->page}}</td>
                        <td>{{$mission->descr}}</td>
                        <input type="hidden" name="pages[]" value="{{$mission->page}}">
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="student_id" value="{{$student_id}}">
                            <input type="hidden" name="mission_number" value="4">
                            <button type="submit" class="btn-light-green">اختر</button>
                        </td>
                    </tr>
                    @endif
                </table>
                </form>    
            </div>

            <div class="col-lg-3 col-6">
                <form action="{{route('mission.store')}}" method="post">
                @csrf
                <table class=" table-bordered table-juz">
                    <tr>
                        <td colspan="2">الجزء {{$missions5[0]->in_juz}}</td>
                    </tr>
                    <tr>
                        <td>الصفحة</td> 
                        <td>السورة</td>
                    </tr>
                    @if(count($studentMission)>0 && $studentMission[0]['mission_number']==$missions5[0]->in_juz)
                    <tr>
                        <td colspan="2" class="green"> تم </td>
                    </tr>
                    @else
                    @foreach($missions5 as $mission)
                    <tr>
                        <td>{{$mission->page}}</td>
                        <td>{{$mission->descr}}</td>
                        <input type="hidden" name="pages[]" value="{{$mission->page}}">
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="student_id" value="{{$student_id}}">
                            <input type="hidden" name="mission_number" value="5">
                            <button type="submit" class="btn-light-green">اختر</button>
                        </td>
                    </tr>
                    @endif
                </table>
                </form>    
            </div>
            <div class="col-lg-3 col-6">
                <form action="{{route('mission.store')}}" method="post">
                @csrf
                <table class=" table-bordered table-juz">
                    <tr>
                        <td colspan="2">الجزء {{$missions6[0]->in_juz}}</td>
                    </tr>
                    <tr>
                        <td>الصفحة</td> 
                        <td>السورة</td>
                    </tr>
                    @if(count($studentMission)>0 && $studentMission[0]['mission_number']==$missions6[0]->in_juz)
                    <tr>
                        <td colspan="6" class="green"> تم </td>
                    </tr>
                    @else
                    @foreach($missions6 as $mission)
                    <tr>
                        <td>{{$mission->page}}</td>
                        <td>{{$mission->descr}}</td>
                        <input type="hidden" name="pages[]" value="{{$mission->page}}">
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="student_id" value="{{$student_id}}">
                            <input type="hidden" name="mission_number" value="2">
                            <button type="submit" class="btn-light-green">اختر</button>
                        </td>
                    </tr>
                    @endif
                </table>
                </form>    
            </div>
            <div class="col-lg-3 col-6">
                <form action="{{route('mission.store')}}" method="post">
                @csrf
                <table class=" table-bordered table-juz">
                    <tr>
                        <td colspan="2">الجزء {{$missions7[0]->in_juz}}</td>
                    </tr>
                    <tr>
                        <td>الصفحة</td> 
                        <td>السورة</td>
                    </tr>
                    @if(count($studentMission)>0 && $studentMission[0]['mission_number']==$missions7[0]->in_juz)
                    <tr>
                        <td colspan="2" class="green"> تم </td>
                    </tr>
                    @else
                    @foreach($missions7 as $mission)
                    <tr>
                        <td>{{$mission->page}}</td>
                        <td>{{$mission->descr}}</td>
                        <input type="hidden" name="pages[]" value="{{$mission->page}}">
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="student_id" value="{{$student_id}}">
                            <input type="hidden" name="mission_number" value="7">
                            <button type="submit" class="btn-light-green">اختر</button>
                        </td>
                    </tr>
                    @endif
                </table>
                </form>    
            </div>
            <div class="col-lg-3 col-6">
                <form action="{{route('mission.store')}}" method="post">
                @csrf
                <table class=" table-bordered table-juz">
                    <tr>
                        <td colspan="2">الجزء {{$missions8[0]->in_juz}}</td>
                    </tr>
                    <tr>
                        <td>الصفحة</td> 
                        <td>السورة</td>
                    </tr>
                    @if(count($studentMission)>0 && $studentMission[0]['mission_number']==$missions8[0]->in_juz)
                    <tr>
                        <td colspan="2" class="green"> تم </td>
                    </tr>
                    @else
                    @foreach($missions8 as $mission)
                    <tr>
                        <td>{{$mission->page}}</td>
                        <td>{{$mission->descr}}</td>
                        <input type="hidden" name="pages[]" value="{{$mission->page}}">
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="student_id" value="{{$student_id}}">
                            <input type="hidden" name="mission_number" value="8">
                            <button type="submit" class="btn-light-green">اختر</button>
                        </td>
                    </tr>
                    @endif
                </table>
                </form>    
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-6">
                <form action="{{route('mission.store')}}" method="post">
                @csrf
                <table class=" table-bordered table-juz">
                    <tr>
                        <td colspan="2">الجزء {{$missions9[0]->in_juz}}</td>
                    </tr>
                    <tr>
                        <td>الصفحة</td> 
                        <td>السورة</td>
                    </tr>
                    @if(count($studentMission)>0 && $studentMission[0]['mission_number']==$missions9[0]->in_juz)
                    <tr>
                        <td colspan="2" class="green"> تم </td>
                    </tr>
                    @else
                    @foreach($missions9 as $mission)
                    <tr>
                        <td>{{$mission->page}}</td>
                        <td>{{$mission->descr}}</td>
                        <input type="hidden" name="pages[]" value="{{$mission->page}}">
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="student_id" value="{{$student_id}}">
                            <input type="hidden" name="mission_number" value="9">
                            <button type="submit" class="btn-light-green">اختر</button>
                        </td>
                    </tr>
                    @endif
                </table>
                </form>    
            </div>
            <div class="col-lg-3 col-6">
                <form action="{{route('mission.store')}}" method="post">
                @csrf
                <table class=" table-bordered table-juz">
                    <tr>
                        <td colspan="2">الجزء {{$missions10[0]->in_juz}}</td>
                    </tr>
                    <tr>
                        <td>الصفحة</td> 
                        <td>السورة</td>
                    </tr>
                    @if(count($studentMission)>0 && $studentMission[0]['mission_number']==$missions10[0]->in_juz)
                    <tr>
                        <td colspan="2" class="green"> تم </td>
                    </tr>
                    @else
                    @foreach($missions10 as $mission)
                    <tr>
                        <td>{{$mission->page}}</td>
                        <td>{{$mission->descr}}</td>
                        <input type="hidden" name="pages[]" value="{{$mission->page}}">
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="student_id" value="{{$student_id}}">
                            <input type="hidden" name="mission_number" value="10">
                            <button type="submit" class="btn-light-green">اختر</button>
                        </td>
                    </tr>
                    @endif
                </table>
                </form>    
            </div>
            <div class="col-lg-3 col-6">
                <form action="{{route('mission.store')}}" method="post">
                @csrf
                <table class=" table-bordered table-juz">
                    <tr>
                        <td colspan="2">الجزء {{$missions11[0]->in_juz}}</td>
                    </tr>
                    <tr>
                        <td>الصفحة</td> 
                        <td>السورة</td>
                    </tr>
                    @if(count($studentMission)>0 && $studentMission[0]['mission_number']==$missions11[0]->in_juz)
                    <tr>
                        <td colspan="2" class="green"> تم </td>
                    </tr>
                    @else
                    @foreach($missions11 as $mission)
                    <tr>
                        <td>{{$mission->page}}</td>
                        <td>{{$mission->descr}}</td>
                        <input type="hidden" name="pages[]" value="{{$mission->page}}">
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="student_id" value="{{$student_id}}">
                            <input type="hidden" name="mission_number" value="11">
                            <button type="submit" class="btn-light-green">اختر</button>
                        </td>
                    </tr>
                    @endif
                </table>
                </form>    
            </div>
            <div class="col-lg-3 col-6">
                <form action="{{route('mission.store')}}" method="post">
                @csrf
                <table class=" table-bordered table-juz">
                    <tr>
                        <td colspan="2">الجزء {{$missions12[0]->in_juz}}</td>
                    </tr>
                    <tr>
                        <td>الصفحة</td> 
                        <td>السورة</td>
                    </tr>
                    @if(count($studentMission)>0 && $studentMission[0]['mission_number']==$missions12[0]->in_juz)
                    <tr>
                        <td colspan="2" class="green"> تم </td>
                    </tr>
                    @else
                    @foreach($missions12 as $mission)
                    <tr>
                        <td>{{$mission->page}}</td>
                        <td>{{$mission->descr}}</td>
                        <input type="hidden" name="pages[]" value="{{$mission->page}}">
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="student_id" value="{{$student_id}}">
                            <input type="hidden" name="mission_number" value="12">
                            <button type="submit" class="btn-light-green">اختر</button>
                        </td>
                    </tr>
                    @endif
                </table>
                </form>    
            </div>

            <div class="col-lg-3 col-6">
                <form action="{{route('mission.store')}}" method="post">
                @csrf
                <table class=" table-bordered table-juz">
                    <tr>
                        <td colspan="2">الجزء {{$missions13[0]->in_juz}}</td>
                    </tr>
                    <tr>
                        <td>الصفحة</td> 
                        <td>السورة</td>
                    </tr>
                    @if(count($studentMission)>0 && $studentMission[0]['mission_number']==$missions13[0]->in_juz)
                    <tr>
                        <td colspan="2" class="green"> تم </td>
                    </tr>
                    @else
                    @foreach($missions13 as $mission)
                    <tr>
                        <td>{{$mission->page}}</td>
                        <td>{{$mission->descr}}</td>
                        <input type="hidden" name="pages[]" value="{{$mission->page}}">
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="student_id" value="{{$student_id}}">
                            <input type="hidden" name="mission_number" value="13">
                            <button type="submit" class="btn-light-green">اختر</button>
                        </td>
                    </tr>
                    @endif
                </table>
                </form>    
            </div>
            <div class="col-lg-3 col-6">
                <form action="{{route('mission.store')}}" method="post">
                @csrf
                <table class=" table-bordered table-juz">
                    <tr>
                        <td colspan="2">الجزء {{$missions14[0]->in_juz}}</td>
                    </tr>
                    <tr>
                        <td>الصفحة</td> 
                        <td>السورة</td>
                    </tr>
                    @if(count($studentMission)>0 && $studentMission[0]['mission_number']==$missions14[0]->in_juz)
                    <tr>
                        <td colspan="14" class="green"> تم </td>
                    </tr>
                    @else
                    @foreach($missions14 as $mission)
                    <tr>
                        <td>{{$mission->page}}</td>
                        <td>{{$mission->descr}}</td>
                        <input type="hidden" name="pages[]" value="{{$mission->page}}">
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="student_id" value="{{$student_id}}">
                            <input type="hidden" name="mission_number" value="2">
                            <button type="submit" class="btn-light-green">اختر</button>
                        </td>
                    </tr>
                    @endif
                </table>
                </form>    
            </div>
            <div class="col-lg-3 col-6">
                <form action="{{route('mission.store')}}" method="post">
                @csrf
                <table class=" table-bordered table-juz">
                    <tr>
                        <td colspan="2">الجزء {{$missions15[0]->in_juz}}</td>
                    </tr>
                    <tr>
                        <td>الصفحة</td> 
                        <td>السورة</td>
                    </tr>
                    @if(count($studentMission)>0 && $studentMission[0]['mission_number']==$missions15[0]->in_juz)
                    <tr>
                        <td colspan="2" class="green"> تم </td>
                    </tr>
                    @else
                    @foreach($missions15 as $mission)
                    <tr>
                        <td>{{$mission->page}}</td>
                        <td>{{$mission->descr}}</td>
                        <input type="hidden" name="pages[]" value="{{$mission->page}}">
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="student_id" value="{{$student_id}}">
                            <input type="hidden" name="mission_number" value="15">
                            <button type="submit" class="btn-light-green">اختر</button>
                        </td>
                    </tr>
                    @endif
                </table>
                </form>    
            </div>
            <div class="col-lg-3 col-6">
                <form action="{{route('mission.store')}}" method="post">
                @csrf
                <table class=" table-bordered table-juz">
                    <tr>
                        <td colspan="2">الجزء {{$missions16[0]->in_juz}}</td>
                    </tr>
                    <tr>
                        <td>الصفحة</td> 
                        <td>السورة</td>
                    </tr>
                    @if(count($studentMission)>0 && $studentMission[0]['mission_number']==$missions16[0]->in_juz)
                    <tr>
                        <td colspan="2" class="green"> تم </td>
                    </tr>
                    @else
                    @foreach($missions16 as $mission)
                    <tr>
                        <td>{{$mission->page}}</td>
                        <td>{{$mission->descr}}</td>
                        <input type="hidden" name="pages[]" value="{{$mission->page}}">
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="student_id" value="{{$student_id}}">
                            <input type="hidden" name="mission_number" value="16">
                            <button type="submit" class="btn-light-green">اختر</button>
                        </td>
                    </tr>
                    @endif
                </table>
                </form>    
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-6">
                <form action="{{route('mission.store')}}" method="post">
                @csrf
                <table class=" table-bordered table-juz">
                    <tr>
                        <td colspan="2">الجزء {{$missions17[0]->in_juz}}</td>
                    </tr>
                    <tr>
                        <td>الصفحة</td> 
                        <td>السورة</td>
                    </tr>
                    @if(count($studentMission)>0 && $studentMission[0]['mission_number']==$missions17[0]->in_juz)
                    <tr>
                        <td colspan="2" class="green"> تم </td>
                    </tr>
                    @else
                    @foreach($missions17 as $mission)
                    <tr>
                        <td>{{$mission->page}}</td>
                        <td>{{$mission->descr}}</td>
                        <input type="hidden" name="pages[]" value="{{$mission->page}}">
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="student_id" value="{{$student_id}}">
                            <input type="hidden" name="mission_number" value="17">
                            <button type="submit" class="btn-light-green">اختر</button>
                        </td>
                    </tr>
                    @endif
                </table>
                </form>    
            </div>
            <div class="col-lg-3 col-6">
                <form action="{{route('mission.store')}}" method="post">
                @csrf
                <table class=" table-bordered table-juz">
                    <tr>
                        <td colspan="2">الجزء {{$missions18[0]->in_juz}}</td>
                    </tr>
                    <tr>
                        <td>الصفحة</td> 
                        <td>السورة</td>
                    </tr>
                    @if(count($studentMission)>0 && $studentMission[0]['mission_number']==$missions18[0]->in_juz)
                    <tr>
                        <td colspan="2" class="green"> تم </td>
                    </tr>
                    @else
                    @foreach($missions18 as $mission)
                    <tr>
                        <td>{{$mission->page}}</td>
                        <td>{{$mission->descr}}</td>
                        <input type="hidden" name="pages[]" value="{{$mission->page}}">
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="student_id" value="{{$student_id}}">
                            <input type="hidden" name="mission_number" value="18">
                            <button type="submit" class="btn-light-green">اختر</button>
                        </td>
                    </tr>
                    @endif
                </table>
                </form>    
            </div>
            <div class="col-lg-3 col-6">
                <form action="{{route('mission.store')}}" method="post">
                @csrf
                <table class=" table-bordered table-juz">
                    <tr>
                        <td colspan="2">الجزء {{$missions19[0]->in_juz}}</td>
                    </tr>
                    <tr>
                        <td>الصفحة</td> 
                        <td>السورة</td>
                    </tr>
                    @if(count($studentMission)>0 && $studentMission[0]['mission_number']==$missions19[0]->in_juz)
                    <tr>
                        <td colspan="2" class="green"> تم </td>
                    </tr>
                    @else
                    @foreach($missions19 as $mission)
                    <tr>
                        <td>{{$mission->page}}</td>
                        <td>{{$mission->descr}}</td>
                        <input type="hidden" name="pages[]" value="{{$mission->page}}">
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="student_id" value="{{$student_id}}">
                            <input type="hidden" name="mission_number" value="19">
                            <button type="submit" class="btn-light-green">اختر</button>
                        </td>
                    </tr>
                    @endif
                </table>
                </form>    
            </div>
            <div class="col-lg-3 col-6">
                <form action="{{route('mission.store')}}" method="post">
                @csrf
                <table class=" table-bordered table-juz">
                    <tr>
                        <td colspan="2">الجزء {{$missions20[0]->in_juz}}</td>
                    </tr>
                    <tr>
                        <td>الصفحة</td> 
                        <td>السورة</td>
                    </tr>
                    @if(count($studentMission)>0 && $studentMission[0]['mission_number']==$missions20[0]->in_juz)
                    <tr>
                        <td colspan="2" class="green"> تم </td>
                    </tr>
                    @else
                    @foreach($missions20 as $mission)
                    <tr>
                        <td>{{$mission->page}}</td>
                        <td>{{$mission->descr}}</td>
                        <input type="hidden" name="pages[]" value="{{$mission->page}}">
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="student_id" value="{{$student_id}}">
                            <input type="hidden" name="mission_number" value="20">
                            <button type="submit" class="btn-light-green">اختر</button>
                        </td>
                    </tr>
                    @endif
                </table>
                </form>    
            </div>

            <div class="col-lg-3 col-6">
                <form action="{{route('mission.store')}}" method="post">
                @csrf
                <table class=" table-bordered table-juz">
                    <tr>
                        <td colspan="2">الجزء {{$missions21[0]->in_juz}}</td>
                    </tr>
                    <tr>
                        <td>الصفحة</td> 
                        <td>السورة</td>
                    </tr>
                    @if(count($studentMission)>0 && $studentMission[0]['mission_number']==$missions21[0]->in_juz)
                    <tr>
                        <td colspan="2" class="green"> تم </td>
                    </tr>
                    @else
                    @foreach($missions21 as $mission)
                    <tr>
                        <td>{{$mission->page}}</td>
                        <td>{{$mission->descr}}</td>
                        <input type="hidden" name="pages[]" value="{{$mission->page}}">
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="student_id" value="{{$student_id}}">
                            <input type="hidden" name="mission_number" value="21">
                            <button type="submit" class="btn-light-green">اختر</button>
                        </td>
                    </tr>
                    @endif
                </table>
                </form>    
            </div>
            <div class="col-lg-3 col-6">
                <form action="{{route('mission.store')}}" method="post">
                @csrf
                <table class=" table-bordered table-juz">
                    <tr>
                        <td colspan="2">الجزء {{$missions22[0]->in_juz}}</td>
                    </tr>
                    <tr>
                        <td>الصفحة</td> 
                        <td>السورة</td>
                    </tr>
                    @if(count($studentMission)>0 && $studentMission[0]['mission_number']==$missions22[0]->in_juz)
                    <tr>
                        <td colspan="22" class="green"> تم </td>
                    </tr>
                    @else
                    @foreach($missions22 as $mission)
                    <tr>
                        <td>{{$mission->page}}</td>
                        <td>{{$mission->descr}}</td>
                        <input type="hidden" name="pages[]" value="{{$mission->page}}">
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="student_id" value="{{$student_id}}">
                            <input type="hidden" name="mission_number" value="2">
                            <button type="submit" class="btn-light-green">اختر</button>
                        </td>
                    </tr>
                    @endif
                </table>
                </form>    
            </div>
            <div class="col-lg-3 col-6">
                <form action="{{route('mission.store')}}" method="post">
                @csrf
                <table class=" table-bordered table-juz">
                    <tr>
                        <td colspan="2">الجزء {{$missions23[0]->in_juz}}</td>
                    </tr>
                    <tr>
                        <td>الصفحة</td> 
                        <td>السورة</td>
                    </tr>
                    @if(count($studentMission)>0 && $studentMission[0]['mission_number']==$missions23[0]->in_juz)
                    <tr>
                        <td colspan="2" class="green"> تم </td>
                    </tr>
                    @else
                    @foreach($missions23 as $mission)
                    <tr>
                        <td>{{$mission->page}}</td>
                        <td>{{$mission->descr}}</td>
                        <input type="hidden" name="pages[]" value="{{$mission->page}}">
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="student_id" value="{{$student_id}}">
                            <input type="hidden" name="mission_number" value="23">
                            <button type="submit" class="btn-light-green">اختر</button>
                        </td>
                    </tr>
                    @endif
                </table>
                </form>    
            </div>
            <div class="col-lg-3 col-6">
                <form action="{{route('mission.store')}}" method="post">
                @csrf
                <table class=" table-bordered table-juz">
                    <tr>
                        <td colspan="2">الجزء {{$missions24[0]->in_juz}}</td>
                    </tr>
                    <tr>
                        <td>الصفحة</td> 
                        <td>السورة</td>
                    </tr>
                    @if(count($studentMission)>0 && $studentMission[0]['mission_number']==$missions24[0]->in_juz)
                    <tr>
                        <td colspan="2" class="green"> تم </td>
                    </tr>
                    @else
                    @foreach($missions24 as $mission)
                    <tr>
                        <td>{{$mission->page}}</td>
                        <td>{{$mission->descr}}</td>
                        <input type="hidden" name="pages[]" value="{{$mission->page}}">
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="student_id" value="{{$student_id}}">
                            <input type="hidden" name="mission_number" value="24">
                            <button type="submit" class="btn-light-green">اختر</button>
                        </td>
                    </tr>
                    @endif
                </table>
                </form>    
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-6">
                <form action="{{route('mission.store')}}" method="post">
                @csrf
                <table class=" table-bordered table-juz">
                    <tr>
                        <td colspan="2">الجزء {{$missions25[0]->in_juz}}</td>
                    </tr>
                    <tr>
                        <td>الصفحة</td> 
                        <td>السورة</td>
                    </tr>
                    @if(count($studentMission)>0 && $studentMission[0]['mission_number']==$missions25[0]->in_juz)
                    <tr>
                        <td colspan="2" class="green"> تم </td>
                    </tr>
                    @else
                    @foreach($missions25 as $mission)
                    <tr>
                        <td>{{$mission->page}}</td>
                        <td>{{$mission->descr}}</td>
                        <input type="hidden" name="pages[]" value="{{$mission->page}}">
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="student_id" value="{{$student_id}}">
                            <input type="hidden" name="mission_number" value="25">
                            <button type="submit" class="btn-light-green">اختر</button>
                        </td>
                    </tr>
                    @endif
                </table>
                </form>    
            </div>
            <div class="col-lg-3 col-6">
                <form action="{{route('mission.store')}}" method="post">
                @csrf
                <table class=" table-bordered table-juz">
                    <tr>
                        <td colspan="2">الجزء {{$missions26[0]->in_juz}}</td>
                    </tr>
                    <tr>
                        <td>الصفحة</td> 
                        <td>السورة</td>
                    </tr>
                    @if(count($studentMission)>0 && $studentMission[0]['mission_number']==$missions26[0]->in_juz)
                    <tr>
                        <td colspan="2" class="green"> تم </td>
                    </tr>
                    @else
                    @foreach($missions26 as $mission)
                    <tr>
                        <td>{{$mission->page}}</td>
                        <td>{{$mission->descr}}</td>
                        <input type="hidden" name="pages[]" value="{{$mission->page}}">
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="student_id" value="{{$student_id}}">
                            <input type="hidden" name="mission_number" value="26">
                            <button type="submit" class="btn-light-green">اختر</button>
                        </td>
                    </tr>
                    @endif
                </table>
                </form>    
            </div>

            <div class="col-lg-3 col-6">
                <form action="{{route('mission.store')}}" method="post">
                @csrf
                <table class=" table-bordered table-juz">
                    <tr>
                        <td colspan="2">الجزء {{$missions27[0]->in_juz}}</td>
                    </tr>
                    <tr>
                        <td>الصفحة</td> 
                        <td>السورة</td>
                    </tr>
                    @if(count($studentMission)>0 && $studentMission[0]['mission_number']==$missions27[0]->in_juz)
                    <tr>
                        <td colspan="2" class="green"> تم </td>
                    </tr>
                    @else
                    @foreach($missions27 as $mission)
                    <tr>
                        <td>{{$mission->page}}</td>
                        <td>{{$mission->descr}}</td>
                        <input type="hidden" name="pages[]" value="{{$mission->page}}">
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="student_id" value="{{$student_id}}">
                            <input type="hidden" name="mission_number" value="27">
                            <button type="submit" class="btn-light-green">اختر</button>
                        </td>
                    </tr>
                    @endif
                </table>
                </form>    
            </div>
            <div class="col-lg-3 col-6">
                <form action="{{route('mission.store')}}" method="post">
                @csrf
                <table class=" table-bordered table-juz">
                    <tr>
                        <td colspan="2">الجزء {{$missions28[0]->in_juz}}</td>
                    </tr>
                    <tr>
                        <td>الصفحة</td> 
                        <td>السورة</td>
                    </tr>
                    @if(count($studentMission)>0 && $studentMission[0]['mission_number']==$missions28[0]->in_juz)
                    <tr>
                        <td colspan="28" class="green"> تم </td>
                    </tr>
                    @else
                    @foreach($missions28 as $mission)
                    <tr>
                        <td>{{$mission->page}}</td>
                        <td>{{$mission->descr}}</td>
                        <input type="hidden" name="pages[]" value="{{$mission->page}}">
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="student_id" value="{{$student_id}}">
                            <input type="hidden" name="mission_number" value="2">
                            <button type="submit" class="btn-light-green">اختر</button>
                        </td>
                    </tr>
                    @endif
                </table>
                </form>    
            </div>
            <div class="col-lg-3 col-6">
                <form action="{{route('mission.store')}}" method="post">
                @csrf
                <table class=" table-bordered table-juz">
                    <tr>
                        <td colspan="2">الجزء {{$missions29[0]->in_juz}}</td>
                    </tr>
                    <tr>
                        <td>الصفحة</td> 
                        <td>السورة</td>
                    </tr>
                    @if(count($studentMission)>0 && $studentMission[0]['mission_number']==$missions29[0]->in_juz)
                    <tr>
                        <td colspan="2" class="green"> تم </td>
                    </tr>
                    @else
                    @foreach($missions29 as $mission)
                    <tr>
                        <td>{{$mission->page}}</td>
                        <td>{{$mission->descr}}</td>
                        <input type="hidden" name="pages[]" value="{{$mission->page}}">
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="student_id" value="{{$student_id}}">
                            <input type="hidden" name="mission_number" value="29">
                            <button type="submit" class="btn-light-green">اختر</button>
                        </td>
                    </tr>
                    @endif
                </table>
                </form>    
            </div>
            <div class="col-lg-3 col-6">
                <form action="{{route('mission.store')}}" method="post">
                @csrf
                <table class=" table-bordered table-juz">
                    <tr>
                        <td colspan="2">الجزء {{$missions30[0]->in_juz}}</td>
                    </tr>
                    <tr>
                        <td>الصفحة</td> 
                        <td>السورة</td>
                    </tr>
                    @if(count($studentMission)>0 && $studentMission[0]['mission_number']==$missions30[0]->in_juz)
                    <tr>
                        <td colspan="2" class="green"> تم </td>
                    </tr>
                    @else
                    @foreach($missions30 as $mission)
                    <tr>
                        <td>{{$mission->page}}</td>
                        <td>{{$mission->descr}}</td>
                        <input type="hidden" name="pages[]" value="{{$mission->page}}">
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="student_id" value="{{$student_id}}">
                            <input type="hidden" name="mission_number" value="30">
                            <button type="submit" class="btn-light-green">اختر</button>
                        </td>
                    </tr>
                    @endif
                </table>
                </form>    
            </div>
        </div>
    </div> 
@endsection
