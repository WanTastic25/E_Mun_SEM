@extends('layouts.app')

@section('content')
<div class="container-fluid h-100 bg-white">
	<div class="row justify-content-center h-100 align-items-center">
		<div class="col-md-8 py-5">
			<div class="card border-0 shadow">
				<div class="card-header bg-primary">{{ __('Pengesahan Kata Laluan') }}</div>

				<div class="card-body">
					{{ __('Sila sahkan kata laluan anda sebelum meneruskan.') }}

					<form method="POST" action="{{ route('password.confirm') }}">
						@csrf

						<div class="row mb-3">
							<label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Kata Laluan') }}</label>

							<div class="col-md-6">
								<input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
									name="password" required autocomplete="current-password">

								@error('password')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>

						<div class="row mb-0">
							<div class="col-md-8 offset-md-4">
								<button type="submit" class="btn btn-primary">
									{{ __('Sahkan Kata Laluan') }}
								</button>

								@if (Route::has('password.request'))
								<a class="btn btn-link" href="{{ route('password.request') }}">
									{{ __('Lupa Kata Laluan?') }}
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