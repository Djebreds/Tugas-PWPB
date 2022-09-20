@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<section class="vh-50">
						<div class="container py-5 h-100">
							<div class="row d-flex align-items-center justify-content-center h-100">
								<div class="col-md-7 col-lg-6 col-xl-5">
									<img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg" class="img-fluid"
										alt="Phone image">
								</div>
								<div class="col-md-8 col-lg-6 col-xl-6 offset-xl-1">
									<h2 class="mb-3">Sign up to home</h2>
									<form method="POST" action="{{ route('register') }} ">
										@csrf
										<!-- Name input -->
										<div class="form-outline mb-4">
											<input type="text" id="name" name="name"
												class="form-control form-control-lg @error('name') is-invalid @enderror" value="{{ old('name') }}" required
												autofocus />
											<label class="form-label" for="name">Your name</label>
											@error('name')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>

										<!-- Email input -->
										<div class="form-outline mb-4">
											<input type="email" id="email" name="email"
												class="form-control form-control-lg @error('email') is-invalid @enderror" value="{{ old('email') }}"
												required autocomplete="email" autofocus />
											<label class="form-label" for="email">Your email address</label>
											@error('email')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>

										<!-- Password input -->
										<div class="form-outline mb-4">
											<input type="password" id="password" name="password"
												class="form-control form-control-lg @error('password') is-invalid @enderror" value="{{ old('password') }}"
												required autocomplete="password" autofocus />
											<label class="form-label" for="password">Your password</label>
											@error('password')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>

										<!-- Password confirmation -->
										<div class="form-outline mb-4">
											<input type="password" id="password-confirm" name="password_confirmation"
												class="form-control form-control-lg @error('password_confirmation') is-invalid @enderror required" required
												autocomplete="new-password" autofocus />
											<label class="form-label" for="password">Your password confirmation</label>
											@error('password_confirmation')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>

										<!-- Submit button -->
										<button type="submit" class="btn btn-primary btn-md btn-block">Sign up</button>

										<div class="my-3">
											<p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
										</div>

										<a class="btn btn-primary btn-md btn-block" role="button">
											<i class="fab fa-google me-2"></i>Continue with Google
										</a>

										<div class="text-center my-3">
											<p>Already have an account ? <a href="{{ route('login') }}">Sign in</a></p>
										</div>
									</form>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
	</div>
@endsection
