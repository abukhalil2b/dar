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
              <form action="{{route('student.warning.update')}}" method="post">
                @csrf
                  <div class="group-control">
                      <input name="note" id="js-warn" class="form-control" value="{{$todyWarning->note}}" />
                  </div>
                  <div class="group-control pt-3">
                    <input type="hidden" name="warning_id" value="{{$todyWarning->id}}">
                      <button class="btn btn-light-green btn-100" type="submit">حفظ التعديل</button>
                  </div>
              </form>
            </div>
        </div>

    </div>
</section><!--/body-->

@endsection
