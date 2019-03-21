@extends('layouts.app')

@section('content')

<section class="body">
    <div class="container">
        <div class="row pt-3">
            
        </div>
        <div class="row pt-3">
            <div class="col-lg-12">
                <span class="body-title-lg"> الملاحظات </span>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-lg-12">
                <select id="js-select-warn" class="form-control">
                    <option value=""></option>
                    <option value="test1">test1</option>
                </select>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-lg-12">
              <form action="{{route('student.warning.store')}}" method="post">
                @csrf
                  <div class="group-control">
                      <input name="note" id="js-warn" class="form-control" />
                  </div>
                  <div class="group-control pt-3">
                    <input type="hidden" name="student_id" value="{{$student->id}}">
                      <button class="btn btn-light-green btn-100" type="submit">حفظ</button>
                      <span class="body-title-sm text-danger">{{$msg}}</span>
                  </div>
              </form>
            </div>
        </div>

    </div>
</section><!--/body-->

@endsection
@section('javascript')
<script>
    $(document).ready(function() {
        $('#js-select-warn').on('change',function(){
             var jswarn = document.getElementById("js-warn").value = this.value;
        console.log(jswarn)
        })
        
    });
</script>
@endsection