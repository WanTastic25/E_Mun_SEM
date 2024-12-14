@extends('layouts.app')

@section('content')
<style>
	body {
		background-image: url("img/bg.jpg");
		background-size: cover;
	}
</style>
	<div class="container h-100">
		<div class="row justify-content-center  h-100 align-items-center">
			<div class="col-6 py-5">
				<form action="{{ route('admin.add_staff') }}" class="row g-3 shadow p-5 bg-secondary rounded-5 needs-validation"
					method="POST" novalidate>
					@csrf
					<div class="col-12">
						<h3>Pendaftaran Akaun Staf</h3>
					</div>

					<div class="col-6">
						<label class="form-label" for="Staff_ID">ID Staf</label>
						<input type="text" id="Staff_ID" value="{{ old('Staff_ID') }}"
							class="form-control @error('Staff_ID') is-invalid @enderror" name="Staff_ID" required>
						@error('Staff_ID')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
						@enderror
					</div>

					<div class="col-6">
						<label class="form-label" for="User_IC">Nombor Kad Pengenalan</label>
						<input type="text" id="User_IC" value="{{ old('User_IC') }}"
							class="form-control @error('User_IC') is-invalid @enderror" name="User_IC" required>
						@error('User_IC')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
						@enderror
					</div>

					<div class="col-6">
						<label class="form-label" for="User_Name">Nama Penuh</label>
						<input type="text" id="User_Name" value="{{ old('User_Name') }}"
							class="form-control @error('User_Name') is-invalid @enderror" name="User_Name" required>
						@error('User_Name')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
						@enderror
					</div>

					<div class="col-6">
						<label for="User_Gender" class="form-label">Jantina</label>
						<select id="User_Gender" class="form-select @error('User_Gender') is-invalid @enderror" name="User_Gender"
							required>
							<option value="" hidden selected></option>
							<option value="Lelaki" {{ old('User_Gender') === 'Lelaki' ? 'selected' : '' }}>Lelaki</option>
							<option value="Perempuan" {{ old('User_Gender') === 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
						</select>
						@error('gender')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
						@enderror
					</div>

					<div class="col-6">
						<label class="form-label" for="email">Emel</label>
						<input type="email" id="email" value="{{ old('email') }}"
							class="form-control @error('email') is-invalid @enderror" name="email" required>
						@error('email')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
						@enderror
					</div>

					<div class="col-6">
						<label class="form-label" for="User_Phone_Number">Nombor Telefon</label>
						<input type="tel" id="User_Phone_Number" value="{{ old('User_Phone_Number') }}"
							class="form-control @error('User_Phone_Number') is-invalid @enderror" name="User_Phone_Number" required>
						@error('User_Phone_Number')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
						@enderror
					</div>

					<div class="col-6">
						<label class="form-label" for="password">Kata Laluan</label>
						<input type="password" id="password" class="form-control @error('password') is-invalid @enderror" minlength="8"
							name="password" required>
						@error('password')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
						@enderror
					</div>

					<div class="col-6">
						<label class="form-label" for="password_confirmation">Sahkan Kata Laluan</label>
						<input type="password" id="password_confirmation" class="form-control @error('password') is-invalid @enderror"
							minlength="8" name="password_confirmation" required>
						@error('password')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
						@enderror
					</div>


					<div class="col-12">
						<button type="submit" class="btn btn-primary" onclick="return confirm('Sahkan daftar?')">Daftar</button>
						<a class="btn btn-danger" href="{{ route('admin.staff_list') }}">Batal</a>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script>
		document.getElementById('staff_list').classList.add('active');
	</script>
@endsection
