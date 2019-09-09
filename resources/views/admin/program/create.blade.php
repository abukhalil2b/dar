@extends('layouts.app')

@section('content')

<section class="body">
    <div class="container">
        <div class="row pt-3 justify-content-center">
            <div class="col-lg-4">
                <form  action="{{route('program.store')}}" method="post">
                @csrf
                <div class="form-group">
                    اختر البرنامج من القائمة وسجل
                    <select name="program_tag" class="form-control">
                        <option value="anwar">أنوار القرآن</option>
                        <option value="fiqh">المدرسة الفقهية</option>
                        <option value="sundayhero">أبطال الأحد</option>
                    </select>
                </div>
                <input name="month" type="hidden" value="{{date('m',time())}}" >
                <input name="year" type="hidden" value="{{date('Y',time())}}" >
                <button class="btn btn-light-green btn-100" type="submit">سجل الآن </button>
                </form> 
            </div>
        </div> 
        <div class="row pt-3 justify-content-center">
            <div class="col-lg-4">
                @foreach($programs as $program)
                <div>
                    @if($program->program_tag == 'anwar') انوار القرآن @endif
                    @if($program->program_tag == 'fiqh') المدرسة الفقهية @endif
                    @if($program->program_tag == 'sundayhero') ابطال الأحد @endif
                     - 
                    <span class="time">الشهر: {{$program->month}}</span>
                     - 
                    <span class="time">السنة: {{$program->year}}</span>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section><!--/body-->

@endsection
