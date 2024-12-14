@extends('layouts.app')

@section('content')
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

	<div class="container">
		<div class="row ">
			<div class="col text-left g-5 ">
				<br>
				<h5 style="color: rgb(254, 253, 253);">MAKLUMAT KURSUS</h5>
				<br>
				<div class="container text-left">
					<div class="row ">
						<div class="col">
							<div class="border border-5 p-3 rounded-end rounded-start" style="height: auto; width: auto;">
								<div class="border border-5 p-1 text-bg-dark rounded-end rounded-start" style="height: auto;">
									<h5 class="text-center" style="color: white">DAFTAR MAKLUMAT</h5>
								</div>
								<form action="{{ route('staff.updateLocation', $course->Course_ID) }}" method="post">
									@csrf
									@method('PUT')
									<div class="row">
										<div class="col-4" style="margin-left: auto; margin-right: auto;">
											<label for="PAID" class="col-sm col-form-label">PAID</label>
											<input type="text" class="form-control @error('Course_Organization') is-invalid @enderror" id="PAID"
												name="Course_Organization" required value="{{ old('Course_Organization', $course->Course_Organization) }}">
											@error('Course_Organization')
												<div class="invalid-feedback">
													{{ $message }}
												</div>
											@enderror

											<label for="Daerah" class="col-sm col-form-label">Daerah</label>
											<input type="text" class="form-control @error('Course_District') is-invalid @enderror"
												value="{{ old('Course_District', $course->Course_District) }}" id="Daerah" name="Course_District"
												required>
											@error('Course_District')
												<div class="invalid-feedback">
													{{ $message }}
												</div>
											@enderror

											<label for="TarikhMula" class="col-sm col-form-label">Tarikh Mula</label>
											<input type="date" class="form-control @error('Course_DateStart') is-invalid @enderror"
												name="Course_DateStart" id="TarikhMula" value="{{ old('Course_DateStart', $course->Course_DateStart) }}">
											@error('Course_DateStart')
												<div class="invalid-feedback">
													{{ $message }}
												</div>
											@enderror

											<label for="MasaDari" class="col-sm col-form-label">Masa Dari</label>
											<input type="time" class="form-control @error('Course_TimeStart') is-invalid @enderror"
												name="Course_TimeStart" id="MasaDari" value="{{ old('Course_TimeStart', $course->Course_TimeStart) }}">
											@error('Course_TimeStart')
												<div class="invalid-feedback">
													{{ $message }}
												</div>
											@enderror

											<label for="PegawaiBertugas" class="col-sm col-form-label">Pegawai Bertugas</label>
											<input type="text" class="form-control @error('Course_Staff') is-invalid @enderror" name="Course_Staff"
												id="PegawaiBertugas" value="{{ old('Course_Staff', $course->Course_Staff) }}">
											@error('Course_Staff')
												<div class="invalid-feedback">
													{{ $message }}
												</div>
											@enderror

											<label for="NoTelPegawai" class="col-sm col-form-label">No Telefon</label>
											<input type="text" class="form-control @error('Course_StaffNo') is-invalid @enderror"
												value="{{ old('Course_StaffNo', $course->Course_StaffNo) }}" name="Course_StaffNo" id="NoTelPegawai">
											@error('Course_StaffNo')
												<div class="invalid-feedback">
													{{ $message }}
												</div>
											@enderror
										</div>
										<div class="col-4" style="margin-left: auto; margin-right: auto;">
											<label for="Tempat" class="col-sm col-form-label">Tempat</label>
											<input type="text" class="form-control @error('Course_Venue') is-invalid @enderror"
												value="{{ old('Course_Venue', $course->Course_Venue) }}" name="Course_Venue" id="Tempat" required>
											@error('Course_Venue')
												<div class="invalid-feedback">
													{{ $message }}
												</div>
											@enderror

											<label for="Alamat" class="col-sm col-form-label">Alamat</label>
											<input type="text" class="form-control @error('Course_Address') is-invalid @enderror"
												value="{{ old('Course_Address', $course->Course_Address) }}" name="Course_Address" id="Alamat" required>
											@error('Course_Address')
												<div class="invalid-feedback">
													{{ $message }}
												</div>
											@enderror

											<label for="TarikhTamat" class="col-sm col-form-label">Tarikh Tamat</label>
											<input type="date" class="form-control @error('Course_DateEnd') is-invalid @enderror" name="Course_DateEnd"
												id="TarikhTamat" value="{{ old('Course_DateEnd', $course->Course_DateEnd) }}">
											@error('Course_DateEnd')
												<div class="invalid-feedback">
													{{ $message }}
												</div>
											@enderror

											<label for="MasaHingga" class="col-sm col-form-label">Masa Hingga</label>
											<input type="time" class="form-control @error('Course_TimeEnd') is-invalid @enderror" name="Course_TimeEnd"
												id="MasaHingga" value="{{ old('Course_TimeEnd', $course->Course_TimeEnd) }}">
											@error('Course_TimeEnd')
												<div class="invalid-feedback">
													{{ $message }}
												</div>
											@enderror

											<label for="Kapasiti" class="col-sm col-form-label">Kapasiti</label>
											<input type="text" class="form-control @error('Course_Capacity') is-invalid @enderror"
												name="Course_Capacity" id="Kapasiti" value="{{ old('Course_Capacity', $course->Course_Capacity) }}">
											@error('Course_Capacity')
												<div class="invalid-feedback">
													{{ $message }}
												</div>
											@enderror

											<label for="PaparUmum" class="col-sm col-form-label">Papar Umum</label>
											<input type="text" class="form-control @error('Course_Public') is-invalid @enderror"
												name="Course_Public" id="PaparUmum" value="{{ old('Course_Public', $course->Course_Public) }}">
											@error('Course_Public')
												<div class="invalid-feedback">
													{{ $message }}
												</div>
											@enderror

											<br>
											<a class="ms-3 btn btn-danger float-end" href="{{ route('staff.LocationList') }}">Batal</a>
											<button type="submit" class="btn btn-dark float-end">Simpan</button>
										</div>
									</div>
								</form>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<style>
		body {
			background-image: url("img/bg.jpg");
			background-size: cover;
		}

		.border {
			border: 5px solid #000;
			background-color: #ADB0B2;
			border-color: #D2F4EA;
		}
	</style>
@endsection
