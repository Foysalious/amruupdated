@extends('frontend.template.layout')

@section('body-content')

<!-- login page start -->
<section class="login">
	<div class="container">
		<div class="row">
			<div class="col-md-12 login-box">
				<div class="row">
					<div class="col-md-6 offset-md-3">
						<a href="index.php">
							<img src="{{ asset('frontend/images/logo.png') }}" class="img-fluid">
							
						
						</a>
					</div>
				</div>
				<form>
					<div class="form-group">
						<label>email</label>
						<input type="email" class="form-control" name="">
					</div>

					<div class="form-group">
						<label>password</label>
						<input type="password" class="form-control" name="">
					</div>

					<div class="form-group">
						<button class="btn" type="submit">login</button>
					</div>
				</form>
				<div class="row">
					<div class="col-md-12 text-center">
						<a href="{{ route('signup') }}" style="display: inline-block;margin: 15px 0;">not yet registered? go to register page</a>						
					</div>
				</div>
				<div class="row login-bottom">
					<div class="col-md-12">
						<ul>
							<li>
								<a href="">
									<img src="{{asset('Frontend/images/login.png')}}">
								</a>
							</li>
							<li>
								<a href="">
									<img src="{{asset('Frontend/images/loginfb.png')}}">
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- login page end -->

@endsection