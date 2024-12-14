@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col text-left g-5">
				<br>
				<h5 style="color: white;">Kursus Pra-Perkahwinan</h5>
				<br>
				<div class="container text-left">
					<div class = "row">
						<div class= "col">
							<div class="border border-5 p-3 rounded-end rounded-start">
								<div class="border border-5 p-1 text-bg-success rounded-end rounded-start" style="height: auto;">
									<h5 class="text-center" style="color: white">Maklumat Anjuran</h5>
								</div>
								<br>
								<form>
									<div class="col-6 row g-3" style="margin-left: auto; margin-right: auto;">
										<div class="col">
											<label for="anjuran" class="col-sm col-form-label">Anjuran : </label> {{ $course->Course_Organization }}
										</div>
			
										<div class="col-12">
											<label for="Tempat" class="col-sm col-form-label">Tempat : </label> {{ $course->Course_Venue }}
										</div>
			
										<div class="col-12">
											<label for="tarikh" class="col-sm col-form-label">Tarikh Mula : </label> {{ $course->Course_DateStart }}
										</div>
			
										<div class="col-12">
											<label for="tarikh" class="col-sm col-form-label">Tarikh Tamat : </label> {{ $course->Course_DateEnd }}
										</div>
			
										<div class="col-12">
											<label for="masa" class="col-sm col-form-label">Masa Dari: </label> {{ $course->Course_TimeStart }}
										</div>

										<div class="col-12">
											<label for="masa" class="col-sm col-form-label">Masa Hingga: </label> {{ $course->Course_TimeEnd }}
										</div>
			
										<div class="col-12">
											<label for="KapasitiPeserta" class="col-sm col-form-label">Kapasiti Peserta : </label> {{ $course->Course_Capacity }}
										</div>
			
										<div class="col-12">
											<label for="SiriTaklimat" class="col-sm col-form-label">Siri Taklimat : </label> {{ $course->Course_Siri }}
										</div>
			
										<div class="col-12">
											<label for="Pegawai" class="col-sm col-form-label">Pegawai : </label> {{ $course->Course_Staff }}
										</div>
			
										<div class="col-12">
											<label for="NoTelefon" class="col-sm col-form-label">No Telefon : </label> {{ $course->Course_StaffNo }}
										</div>
									</div>
								</form>
								<br>
								<a class="btn btn-success" href="{{ route('user.organization') }}">Kembali</a>
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
			background-color: #56BFA0;
			border-color: #D2F4EA;
		}

		td {
			margin: 10px;
			padding: 5px
		}
	</style>
@endsection
