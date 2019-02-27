@extends('layouts.app')

@section('content')

<div class="body">
		<div class="container">
			<div class="row pt-5">
				<div class="col-lg-12">
					<span class="body-title-lg">مرحبا بك</span>
					<span class="body-title-sm">سجل الدخول</span>
				</div>
			</div>

			<form action="{{route('login')}}" method="post">
				@csrf
				<div class="row justify-content-center pt-5">
					<div class="card login-card">
						<div class="card-body">
							<div class="form-group body-login-input-container">
								<input name="email" type="text"  class="form-control body-login-input"
								 placeholder="بريدك الإلكتروني">
							</div>
							<div class="form-group body-login-input-container">
								<span onclick="showPassword()" class="body-login-passowrd-input-show-txt">اظهار</span>
								<input name="password" id="passwordInput" type="password"  
								class="form-control body-login-input" placeholder="كلمة المرور">
							</div>
							
							 @if(session('status'))
			                <div class="alert alert-danger">
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
						<div class="card-footer login-card-footer">
							<button type="submit" class="btn body-login-btn" > دخول </button>
						</div>
					</div>
				</div>				
			</form>

		</div>
	</div><!--/body-->

	<script>
		function showPassword(){
			var input = document.getElementById('passwordInput');
			input.type='text';
		}
	</script>

@endsection
