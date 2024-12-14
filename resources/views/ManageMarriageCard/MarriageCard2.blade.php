@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

{{-- style for drop-down at left tab --}}
<style>
	.dropdown-menu {
		background-color: #f0f0f0;
		/* Set background color */
		border: none;
		width: 100%;
		/* Remove border */
		/* Add width */
	}

	.dropdown-menu a.dropdown-item {
		color: #333;
		/* Set text color */
	}

	.dropdown-menu a.dropdown-item:hover {
		background-color: #e9ecef;
		/* Set background color on hover */
	}

	.dropdown-menu a.dropdown-item:focus {
		outline: none;
		/* Remove focus outline */
		background-color: #e9ecef;
		/* Set background color on focus */
	}
</style>


<div class="container">
	<div class="row ">
		<div class="col text-left g-5 ">

			<div class="container text-left">
				<div class="row ">
					<div class="col">
						<div style="display: flex; justify-content: center;">
							<div class="border border-5 p-3 rounded-end rounded-start" style="width: 900px;">
								<!-- Your content here -->
								<h5 class="text-center" style="color: white">Permohonan Kad Nikah dan Sijil</h5>

								<form action="" method="post" class="row g-5 needs-validation" novalidate>
									<div class="col-12">
										<label for="NoResit">No.Resit Bayaran</label>

										<div class="input-group rounded">
											<input id="searchbar" onkeyup="" class="form-control rounded" type="text" style="width:600px"
												name="searchNoResit" placeholder="No.Resit..">
											<button class="btn btn-success" id="Search"
												style="margin-left:10px;border-radius:8px; width:100px">Cari</button>
										</div>
										{{-- <div><input type="text" class="form-control" id="NoResit"
												Placeholder="Sila Masukkan No.Resit Bayaran" required><button type="submit"
												class="btn btn-success" role="button" style="float:right" href="#">Cari</button></div> --}}

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
							</style>
						</div>
						@endsection