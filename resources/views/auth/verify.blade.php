@extends('layouts.app')

@section('content')
<div class="container-fluid h-100 bg-white">
	<div class="row justify-content-center h-100 align-items-center">
		<div class="col-md-8 py-5">
			<div class="card border-0 shadow">
				<div class="card-header bg-primary">{{ __('Mengesahkan emel anda') }}</div>

				<div class="card-body">
					@if (session('resent'))
					<div class="alert alert-success" role="alert">
						{{ __('Pautan pengesahan baharu telah dihantar ke emel anda.') }}
					</div>
					@endif

					{{ __('Sebelum meneruskan, sila semak emel anda untuk mendapatkan pautan pengesahan.') }}
					{{ __('Jika anda tidak menerima e-mel tersebut') }},
					<form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
						@csrf
						<button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('klik di sini untuk meminta yang lain')
							}}</button>.
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection