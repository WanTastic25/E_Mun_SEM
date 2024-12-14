@extends('layouts.app')

@section('content')
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
	<div class="container mt-5 pt-5">
		<div class="row g-3 w-100">

			@if (session('updated'))
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

			<div class="col-12 table-responsive">
				<table class="table full-width table-hover" id="user_table">
					<thead class="table-light">
						<tr>
							<th>Bil</th>
							<th>Nombor Kad Pengenalan</th>
							<th>Nama Penuh</th>
							<th>Emel</th>
							<th>Lihat</th>
							<th>Pemadaman</th>
						</tr>
					</thead>

					<tbody>
						@foreach ($users as $user)
							<tr>
								<td>{{ $loop->iteration }}</td>
								<td>{{ $user->User_IC }}</td>
								<td>{{ $user->User_Name }}</td>
								<td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
								<td>
									<a href="{{ route('admin.user_profile', $user->id) }}" class="btn btn-info">Profil</a>
								</td>
								<td>
									<form action="{{ route('admin.delete_user', $user->id) }}" method="POST">
										@csrf
										@method('DELETE')
										<button type="submit" class="btn btn-danger" onclick="return confirm('Sahkan padam?')">Delete</button>
									</form>
								</td>
							</tr>
						@endforeach
					</tbody>

					<tfoot>
						<tr>
							<th>Bil</th>
							<th>Nombor Kad Pengenalan</th>
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
			$('#user_table').DataTable();
		});

		document.getElementById('user_list').classList.add('active');
	</script>
@endsection
