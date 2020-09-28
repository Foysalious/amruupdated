@extends('frontend.template.layout')

@section('body-content')

<!-- login page start -->
<section class="login">
	<div class="container">
		<div class="row">
			<div class="col-md-12 login-box">
				<div class="row">
					<div class="col-md-6 offset-md-3">
						@if( session()->has('registrationSuccess') )
						<div class="alert alert-success alert-dismissible fade show" role="alert">
							<strong>Congratulation!</strong> {{ session()->get('registrationSuccess') }}
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						@endif

						@if( session()->has('login') )
						<div class="alert alert-warning alert-dismissible fade show" role="alert">
							{{ session()->get('login') }}
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						@endif
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 offset-md-3">
						<a href="index.php">
							<img src="{{ asset('frontend/images/logo.png') }}" class="img-fluid">
						</a>
					</div>
				</div>
				<form action="{{ route('login.customer') }}" method="post">
					@csrf
					<div class="form-group">
						<label>email</label>
						<input type="email" class="form-control" name="email">
					</div>

					<div class="form-group">
						<label>password</label>
						<input type="password" class="form-control" name="password">
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