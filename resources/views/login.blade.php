@extends('layouts.app')

@section('content')

<div class="body">
		<div class="container">
			<div class="row pt-3">
				<div class="col-lg-12">
					<span class="body-title-lg">مرحبا بك</span>
					<span class="body-title-sm">سجل الدخول</span>
				</div>
			</div>

			<form action="{{route('user.login')}}" method="post">
				@csrf
				<div class="row justify-content-center pt-3">
					<div class="card login-card">
						<div class="card-body">
							<div class="form-group body-login-input-container">
								<input name="email" type="email"  class="form-control body-login-input"
								 placeholder="بريدك الإلكتروني">
							</div>
							<div class="form-group body-login-input-container">
								<span onclick="showPassword()" class="body-login-passowrd-input-show-txt">اظهار</span>
								<input name="password" id="passwordInput" type="password"  
								class="form-control body-login-input" placeholder="كلمة المرور">
							</div>
						</div>
						<div class="card-footer login-card-footer">
							<button type="submit" class="btn btn-light-green" > دخول </button>
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
