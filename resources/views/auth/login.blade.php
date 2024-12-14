@extends('layouts.app')

@section('content')
	<div class="container-fluid h-100 bg-white">
		<div class="row h-100 align-items-lg-center align-items-start">
			<div
				class="col h-100 bg-gradient bg-primary bg-opacity-50 d-none d-lg-flex align-items-center justify-content-center shadow-lg">
				<div>
					<h1 class="text-white fw-bold">SISTEM <br> MAKLUMAT <br> PERKAHWINAN <br> ISLAM PAHANG</h1>
					<p>JABATAN AGAMA ISLAM NEGERI PAHANG</p>
				</div>
			</div>

			<div class="col">
				<div class="d-block d-lg-none p-5 m-5">
					
				</div>

				<form method="POST" action="{{ route('login') }}" class="row g-3 px-md-5 px-3" >
					<h2 class="fw-bold">Log Masuk ke E-Munakahat</h1>
					@csrf

					@if (session('error'))
						<span class="alert alert-danger alert-dismissible fade show" role="alert">
							<strong>{{ session('error') }}</strong>
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</span>
					@endif

					<div class="col-12">
						<label for="User_IC" class="form-label">{{ __('Nombor Kad Pengenalan') }}</label>
						<input id="User_IC" type="text" class="form-control @error('User_IC') is-invalid @enderror" name="User_IC"
							value="{{ old('User_IC') }}" required autocomplete="User_IC" autofocus>

						@error('User_IC')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>

					<div class="col-12">
						<label for="password" class="form-label">{{ __('Kata Laluan') }}</label>
						<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"
							required autocomplete="current-password">
						@error('password')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>

					<div class="col-12">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="remember" id="remember"
								{{ old('remember') ? 'checked' : '' }}>

							<label class="form-check-label" for="remember">
								{{ __('Ingat Saya') }}
							</label>
							@if (Route::has('password.request'))
								<a class="float-end" href="{{ route('password.request') }}">
									{{ __('Lupa Kata Laluan Anda?') }}
								</a>
							@endif
						</div>
					</div>

					<div class="col-12">
						<button type="submit" class="btn btn-primary">
							{{ __('Log Masuk') }}
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection
