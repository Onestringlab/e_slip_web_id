@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card border-success">
				<div class="card-header text-bg-success">{{ __('Login') }}</div>
				<img src="{{ asset('/images/banner/login page e.slip.png') }}" alt="Card image cap">
				<div class="card-body">
					<form method="POST" action="{{ route('login') }}">
						@csrf
						<div class="row mb-3">
							<label for="nip" class="col-md-4 col-form-label text-md-end">{{ __('NIP') }}</label>

							<div class="col-md-6">
								<input id="nip" type="nip" class="form-control @error('nip') is-invalid @enderror" name="nip" value="{{ old('nip') }}" required autocomplete="nip" autofocus>

								@error('nip')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>

						<div class="row mb-3">
							<label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Sandi') }}</label>

							<div class="col-md-6">
								<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

								@error('password')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>

						<div class="row mb-3">
							<div class="col-md-6 offset-md-4">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

									<label class="form-check-label" for="remember">
										{{ __('Mengingat Akun Saya ') }}
									</label>
								</div>
							</div>
						</div>

						<div class="row mb-0">
							<div class="col-md-8 offset-md-4">
								<button type="submit" class="btn btn-primary">
									{{ __('Selanjutnya') }}
								</button>

								@if (Route::has('password.request'))
								<a class="btn btn-link" href="{{ route('password.request') }}">
									{{ __('Forgot Your Password?') }}
								</a>
								@endif
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection