@extends('layouts.app')

@section('content')
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
	<div class="container mt-5 pt-5">
		<div class="row g-3 w-100">

			@if (session('created'))
				<div class="col-12">
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>{{ session('created') }}</strong>
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				</div>
			@elseif (session('updated'))
				<div class="col-12">
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>{{ session('updated') }}</strong>
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				</div>
			@elseif (session('deleted'))
				<div class="col-12">
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>{{ session('deleted') }}</strong>
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				</div>
			@endif

			<div class="col-12">
				<a class="btn btn-primary" href="{{ route('admin.staff_form') }}">
					Tambah Staf
				</a>
			</div>

			<div class="col-12 table-responsive">
				<table class="table full-width table-hover" id="staff_table">
					<thead class="table-light">
						<tr>
							<th>Bil</th>
							<th>ID Staf</th>
							<th>Nama Penuh</th>
							<th>Emel</th>
							<th>Lihat</th>
							<th>Pemadaman</th>
						</tr>
					</thead>

					<tbody>
						@foreach ($staffs as $staff)
							<tr>
								<td>{{ $loop->iteration }}</td>
								<td>{{ $staff->Staff_ID }}</td>
								<td>{{ $staff->User_Name }}</td>
								<td><a href="mailto:{{ $staff->email }}">{{ $staff->email }}</a></td>
								<td>
									<a href="{{ route('admin.staff_profile', $staff->id) }}" class="btn btn-info">Profil</a>
								</td>
								<td>
									<form action="{{ route('admin.delete_staff', $staff->id) }}" method="POST">
										@csrf
										@method('DELETE')
										<button type="submit" class="btn btn-danger" onclick="return confirm('Sahkan padam?')">Padam</button>
									</form>
								</td>
							</tr>
						@endforeach
					</tbody>

					<tfoot>
						<tr>
							<th>Bil</th>
							<th>ID Staf</th>
							<th>Nama Penuh</th>
							<th>Emel</th>
							<th>Lihat</th>
							<th>Pemadaman</th>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#staff_table').DataTable();
		});

		document.getElementById('staff_list').classList.add('active');
	</script>
@endsection
