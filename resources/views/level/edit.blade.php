@extends('layouts.app')

@section('content')

<div class="body">
    <div class="container">
        <div class="row pt-3">
            <div class="col-lg-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>
                            	<form id="form" method="post" action="">
                            		
                            	</form>
                            	<input name="name" value="{{$level->name}}">
                            	<input type="hidden" name="level_id" value="{{$level->id}}">
                            	<span id="submit" class="btn btn-light-green" ></span>
                            </td>
                        </tr>
                    </thead>
                    
                </table>
            </div>
        </div>

    </div>
</div>

@endsection

@section('javascript')
<script>
	$(document).ready(function(){
		$('#submit').on('click',function(e){
			e.preventDefault()
			$('#form').submit();
		})
		
	})
</script>
@endsection


