@extends('layouts.app')

@section('content')
<style>
	body {
		background-image: url("img/bg.jpg");
		background-size: cover;
	}
</style>
	<div class="container h-100">
		<div class="row justify-content-center h-100 align-items-center">
			<div class="col py-5">
				<form action="{{ route('staff.update_profile', auth()->user()->id) }}" class="row p-5 g-3 bg-secondary shadow rounded-5 needs-validation" method="POST" novalidate>
					@csrf
					@method('PUT')
					@if (session('updated'))
						<div class="col-12">
							<div class="alert alert-success alert-dismissible fade show" role="alert">
								<strong>{{ session('updated') }}</strong>
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>
						</div>
					@endif
					<div class="col-12">
						<h3>Profil</h3>
					</div>
					<div class="col-6">
						<label class="form-label" for="Staff_ID">ID Staf</label>
						<input type="text" id="Staff_ID" class="form-control @error('Staff_ID') is-invalid @enderror" name="Staff_ID"
							value="{{ old('Staff_ID', auth()->user()->Staff_ID) }}" disabled required>
						@error('Staff_ID')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
						@enderror
					</div>

					<div class="col-6">
						<label class="form-label" for="User_IC">Nombor Kad Pengenalan</label>
						<input type="text" id="User_IC" class="form-control @error('User_IC') is-invalid @enderror" name="User_IC"
							value="{{ old('User_IC', auth()->user()->User_IC) }}" disabled required>
						@error('User_IC')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
						@enderror
					</div>

					<div class="col-6">
						<label class="form-label" for="User_Name">Nama Penuh</label>
						<input type="text" id="User_Name" class="form-control @error('User_Name') is-invalid @enderror" name="User_Name"
							value="{{ old('User_Name', auth()->user()->User_Name) }}" required>
						@error('User_Name')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
						@enderror
					</div>

					<div class="col-6">
						<label for="User_Gender" class="form-label">Jantina</label>
						<select id="User_Gender" class="form-select @error('User_Gender') is-invalid @enderror" name="User_Gender" required
							disabled>
							<option value="{{ auth()->user()->User_Gender }}" selected>{{ auth()->user()->User_Gender }}</option>
						</select>
						@error('User_Gender')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
						@enderror
					</div>

					<div class="col-6">
						<label class="form-label" for="email">Emel</label>
						<input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email"
							value="{{ old('email', auth()->user()->email) }}" required>
						@error('email')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
						@enderror
					</div>

					<div class="col-6">
						<label class="form-label" for="User_Phone_Number">Nombor Telefon</label>
						<input type="tel" id="User_Phone_Number" class="form-control @error('User_Phone_Number') is-invalid @enderror"
							name="User_Phone_Number" value="{{ old('User_Phone_Number', auth()->user()->User_Phone_Number) }}" required>
						@error('User_Phone_Number')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
						@enderror
					</div>

					<div class="col-6">
						<label for="password">Kata Laluan Baru</label>
						<input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror">
						@error('password')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
						@enderror
					</div>

					<div class="col-6">
						<label for="password_confirmation">Sahkan Kata Laluan Baru</label>
						<input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
					</div>

					<div class="col-12">
						<button type="submit" class="btn btn-primary" onclick="return confirm('Sahkan kemaskini?')">Kemaskini</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script>
		document.getElementById('staff_home').classList.add('active')
	</script>
@endsection
