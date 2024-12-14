@extends('layouts.app')

@section('content')
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
        <br>
        <h5 style="color: rgb(254, 253, 253);">Pendaftaran Perkahwinan</h5>
        <br>
        <div class="container text-left">
          <div class="row ">
            <div class="col">
              <div class="border border-5 p-3 rounded-end rounded-start">
                <h5 class="text-center" style="color: white">Permohonan Pendaftaran Perkahwinan</h5>
                <form action="" method="post" class="row g-5 needs-validation" novalidate>
                  <div class="col-12">
                    <label for="icNumber">No.K/P Pasangan:</label>
                    <input type="text" class="form-control" id="icNumber" pattern="[0-9]{12}" required>
                    <small class="form-text text-muted">Sila masukkan No IC 12 Digit.</small>
                    <div class="invalid-feedback">
                      Sila masukkan Nombor IC yang sah.
                    </div>

                  </div>

                  <div class="col-12">
                    <label for="category">Kategori Pendaftaran Nikah:</label>
                    <select class="form-select" id="category" required>
                      <option value="" hidden selected>Pilih kategori Pendaftaran</option>
                      <option value="1">PENDAFTARAN NIKAH DENGAN KEBENARAN</option>
                      <option value="2">Category 2</option>
                      <option value="3">Category 3</option>
                    </select>
                    <div class="invalid-feedback">
                      Sila Pilih Kategori.
                    </div>
                  </div>

                  <div class="col-12">
                    <label for="NoAkuan">No.Akuan Terima Kebenaran Berkahwin:</label>
                    <input type="text" class="form-control" id="NoAkuan" required>
                    <small class="form-text text-muted">Sila masukkan Nombor Akuan Kebenaran Perkahwinan.</small>
                    <div class="invalid-feedback">
                      Sila masukkan Nombor Akuan yang sah.
                    </div>
                  </div>

                  <div class="col-12">
                    <a class="btn btn-success" href="{{ route('user.RegisterNewForm') }}">Daftar</a>
                    <a class="btn btn-success" href="{{ route('user.RegisterList') }}">Kembali</a>
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
      background-color: #56BFA0;
      border-color: #D2F4EA;
    }
  </style>
@endsection
