@extends('layouts.app')

@section('content')
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

	<div class="container">
		<div class="row ">
			<div class="col text-left g-5 ">
				<br>
				<h5 style="color: white;">Kursus Pra-Perkahwinan</h5>
				<br>
				<div class="container text-left">
					<div class="row ">
						<div class="col">
							<div class="border border-5 p-3 rounded-end rounded-start">
								<h5 class="text-center" style="color: white">Semakan Status Kursus Pra Perkahwinan</h5>
								<div class="container">
									<table class="table" id="statusTable">
										<thead>
											<tr>
												<th>Bil</th>
												<th>No. Kad Pengenalan</th>
												<th>Nama</th>
												<th>No. Siri Taklimat</th>
												<th>Tarikh Mohon</th>
												<th>Status</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>011198762565</td>
												<td>John Doe</td>
												<td>1345</td>
												<td>2023-06-02</td>
												<td>LULUS</td>
											</tr>
											<tr>
												<td>2</td>
												<td>019991837341</td>
												<td>Hidayah</td>
												<td>8005</td>
												<td>2022-06-02</td>
												<td>GAGAL</td>
											</tr>
											<!-- Add more table rows here -->
										</tbody>
									</table>
									<div class="col-12">
										<a type="button" class="btn btn-success" role="button" href="{{ route('user.terms') }}">Kembali </a>
									</div>
								</div>
								<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
								<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
								<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
								<script>
									$(document).ready(function() {
										$('#statusTable').DataTable();
									});
								</script>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

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
	</style>
@endsection
