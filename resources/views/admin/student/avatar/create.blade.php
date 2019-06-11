@extends('layouts.app')

@section('content')
<style>
    /* profile avatar */
.fileContainer{
    overflow: hidden;
    position: relative;
}
.fileContainer [type=file]{
    cursor: inherit;
    display: block;
    font-size: 999px;
    filter: alpha(opacity=0);
    min-height: 100%;
    min-width: 100%;
    opacity: 0;
    position: absolute;
    right: 0;
    text-align: right;
    top: 0;
}
</style>
<section class="body">
        <div class="container">
            
            <div class="row pt-3">
                <div class="col-lg-12 col-sm-12">
                    <h4>{{$student->first_name}}</h4>
                    <form name="myForm" action="{{route('admin.avatar.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="student_id" value="{{$student->id}}">
                        <label  class="fileContainer">
                            <img src="{{url('/').$avatar}}"  width="150" height="150">
                            <input type="file" name="avatar" onChange="document.myForm.submit();" 
                            class="form-control"> 
                        </label>
                    </form>     
                </div>

            </div>

        </div>

    </div>
</section><!--/body-->


@endsection
