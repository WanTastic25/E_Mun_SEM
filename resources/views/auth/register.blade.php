@extends('layouts.app')

@section('content')
<div class="container-fluid h-100 bg-white">
	<div class="row justify-content-center h-100 align-items-center">
		<div class="col-md-8 py-5">
			<div class="card border-0 shadow">
				<div class="card-header bg-primary">{{ __('Pendaftaran Akaun') }}</div>

				<div class="card-body">
					<form method="POST" action="{{ route('register') }}">
						@csrf

						<div class="row mb-3">
							<label for="User_IC" class="col-md-4 col-form-label text-md-end">{{ __('Nombor Kad Pengenalan') }}</label>

							<div class="col-md-6">
								<input id="User_IC" type="text" class="form-control @error('User_IC') is-invalid @enderror" name="User_IC"
									value="{{ old('User_IC') }}" required autocomplete="User_IC" autofocus>

								@error('User_IC')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>

						<div class="row mb-3">
							<label for="User_Name" class="col-md-4 col-form-label text-md-end">{{ __('Nama Penuh') }}</label>

							<div class="col-md-6">
								<input id="User_Name" type="text" class="form-control @error('User_Name') is-invalid @enderror" name="User_Name"
									value="{{ old('User_Name') }}" required autocomplete="User_Name" autofocus>

								@error('User_Name')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>

						<div class="row mb-3">
							<label for="User_Gender" class="col-md-4 col-form-label text-md-end">{{ __('Jantina') }}</label>

							<div class="col-md-6">
								<select id="User_Gender" class="form-select @error('User_Gender') is-invalid @enderror" name="User_Gender" required
									autocomplete="User_Gender" autofocus>
									<option value="" hidden selected></option>
									<option value="Lelaki" {{ old('User_Gender')==='Lelaki' ? 'selected' : '' }}>Lelaki</option>
									<option value="Perempuan" {{ old('User_Gender')==='Perempuan' ? 'selected' : '' }}>Perempuan</option>
								</select>

								@error('User_Gender')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>

						<div class="row mb-3">
							<label for="User_Phone_Number" class="col-md-4 col-form-label text-md-end">{{ __('Nombor Telefon') }}</label>

							<div class="col-md-6">
								<input id="User_Phone_Number" type="text" class="form-control @error('User_Phone_Number') is-invalid @enderror"
									name="User_Phone_Number" value="{{ old('User_Phone_Number') }}" required autocomplete="User_Phone_Number" autofocus>

								@error('User_Phone_Number')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>

						<div class="row mb-3">
							<label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Emel') }}</label>

							<div class="col-md-6">
								<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
									value="{{ old('email') }}" required autocomplete="email">

								@error('email')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>

						<div class="row mb-3">
							<label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Kata Laluan') }}</label>

							<div class="col-md-6">
								<input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
									name="password" required autocomplete="new-password">

								@error('password')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>

						<div class="row mb-3">
							<label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Sahkan Kata Laluan')
								}}</label>

							<div class="col-md-6">
								<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
									autocomplete="new-password">
							</div>
						</div>

						<div class="row mb-0">
							<div class="col-md-6 offset-md-4">
								<button type="submit" class="btn btn-primary" onclick="return confirm('Sahkan daftar?')">
									{{ __('Daftar') }}
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection