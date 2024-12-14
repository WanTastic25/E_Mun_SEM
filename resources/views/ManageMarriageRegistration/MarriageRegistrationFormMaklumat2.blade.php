@extends('layouts.app')

@section('content')
  {{-- style for drop-down at left tab
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
  </style> --}}

  <div class="container">
    <div class="row">
      <div class="col text-left g-5">
        <br>
        <h5 style="color: rgb(254, 253, 253);">Pendaftaran Perkahwinan</h5>
        <br>
        <div class="container text-left">
          <div class="row">
            <div class="col">
              <div class="border border-5 p-3 rounded-end rounded-start" style="height: auto;">
                <h5 class="text-center" style="color: white">Borang Pendaftaran Perkahwinan</h5>
                <!--upper tab-->
                <ul class="nav nav-pills mb-4 nav-fill" id="pills-tab" role="tablist">
                  <li class="nav-item bg-dark-green border border-white" role="presentation">
                    <a class="nav-link text-white" href="{{ route('user.RegisterNewForm') }}">Maklumat
                      Pemohon
                    </a>
                  </li>
                  <li class="nav-item border bg-dark-green border-white" role="presentation">
                    <a class="nav-link text-white" href="{{ route('user.RegisterFormPasangan') }}">
                      Maklumat Pasangan
                    </a>
                  </li>
                  <li class="nav-item border bg-dark-green border-white" role="presentation">
                    <a class="nav-link text-white" href="{{ route('user.RegisterFormPasangan') }}">
                      Maklumat Pasangan
                    </a>
                  </li>
                  <li class="nav-item bg-dark-green border border-white" role="presentation">
                    <a class="nav-link text-white active bg-success"
                      href="{{ route('user.MaklumatPerkahwinan') }}">Maklumat
                      Perkahwinan
                    </a>
                  </li>
                </ul>

                <h6 class="text-left" style="color: white; background-color: #2F9577;">MAKLUMAT WALI</h6>
                <form action="" method="post" class="row g-3 needs-validation" novalidate>

                  <!--form for name-->
                  <div class="col-md-7">
                    <label for="namewali">Nama Wali:</label>
                    <input type="text" class="form-control" id="namewali" required>
                    <small class="form-text text-muted">Sila masukkan Nama Wali.</small>
                    <div class="invalid-feedback">
                      Sila masukkan Nama.
                    </div>
                  </div>

                  <div class="col-7">
                    <label for="icNumber">No.K/P Wali</label>
                    <input type="text" class="form-control" id="icNumber" pattern="[0-9]{12}" required>
                    <small class="form-text text-muted">Sila masukkan No IC 12 Digit.</small>
                    <div class="invalid-feedback">
                      Sila masukkan Nombor IC yang sah.
                    </div>
                  </div>

                  <div class="col-12">
                    <label for="AlamatWali ">Alamat Wali</label>
                    <input type="text" class="form-control" id="AlamatWali " required>
                    <small class="form-text text-muted">Sila masukkan Alamat</small>
                    <div class="invalid-feedback">
                      Sila masukkan Alamat.
                    </div>
                  </div>

                  <div class="col-md-6">
                    <label for="tarikhlahirwali">Tarikh Lahir Wali</label>
                    <input type="date" class="form-control" name="tarikhlahirwali" id="tarikhmohon">
                  </div>


                  <div class="col-md-4">
                    <label for="umurwali">Umur Wali:</label>
                    <input type="text" class="form-control" id="umurwali" required>
                    <small class="form-text text-muted">Sila masukkan Umur Wali.</small>
                    <div class="invalid-feedback">
                      Sila masukkan Umur.
                    </div>
                  </div>

                  <div class="col-md-4">
                    <label for="hubungan">Hubungan:</label>
                    <input type="text" class="form-control" id="hubungan" required>
                    <small class="form-text text-muted">Sila Masukkan Hubungan wali .</small>
                    <div class="invalid-feedback">
                      Masukkan Hubungan Wali
                    </div>

                  </div>

                  <h6 class="text-left" style="color: white; background-color: #2F9577;">MAKLUMAT SAKSI (Untuk
                    Mengesahkan Borang Pemohonan Kebenaran Kahwin)</h6>
                  <form action="" method="post" class="row g-3 needs-validation" novalidate>


                    <div class="col-md-7">
                      <label for="saksi1">Nama Saksi 1:</label>
                      <input type="text" class="form-control" id="saksi1" required>
                      <small class="form-text text-muted">Sila masukkan Nama Saksi.</small>
                      <div class="invalid-feedback">
                        Sila masukkan Nama Saksi.
                      </div>
                    </div>

                    <div class="col-7">
                      <label for="icNumbersaksi1">No.K/P Saksi 1</label>
                      <input type="text" class="form-control" id="icNumbersaksi1" pattern="[0-9]{12}" required>
                      <small class="form-text text-muted">Sila masukkan No IC 12 Digit.</small>
                      <div class="invalid-feedback">
                        Sila masukkan Nombor IC yang sah.
                      </div>
                    </div>

                    <div class="col-4">
                      <label for="umursaksi1">Umur Saksi 1</label>
                      <input type="text" class="form-control" id="umursaksi1" required>
                      <div class="invalid-feedback">
                        Sila masukkan Umur.
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="Alamatsaksi1 ">Alamat Saksi 1:</label>
                      <input type="text" class="form-control" id="Alamatsaksi1 " required>
                      <small class="form-text text-muted">Sila masukkan Alamat</small>
                      <div class="invalid-feedback">
                        Sila masukkan Alamat.
                      </div>
                    </div>

                    <div class="col-md-5">
                      <label for="NoTelsaksi1">No Telefon Saksi 1</label>
                      <input type="text" class="form-control" id="NoTelsaksi1" pattern="[0-9]{11}"required>
                      <small class="form-text text-muted">Sila masukkan No telefon</small>
                      <div class="invalid-feedback">
                        Sila masukkan Nombor Tel yang sah.
                      </div>
                    </div>



                    <div class="col-md-8">
                      <label for="saksi2">Nama Saksi 2:</label>
                      <input type="text" class="form-control" id="saksi2" required>
                      <small class="form-text text-muted">Sila masukkan Nama Saksi.</small>
                      <div class="invalid-feedback">
                        Sila masukkan Nama Saksi.
                      </div>
                    </div>

                    <div class="col-8">
                      <label for="icNumbersaksi2">No.K/P Saksi 2</label>
                      <input type="text" class="form-control" id="icNumbersaksi2" pattern="[0-9]{12}" required>
                      <small class="form-text text-muted">Sila masukkan No IC 12 Digit.</small>
                      <div class="invalid-feedback">
                        Sila masukkan Nombor IC yang sah.
                      </div>
                    </div>

                    <div class="col-5">
                      <label for="umursaksi2">Umur Saksi 2</label>
                      <input type="text" class="form-control" id="umursaksi2" required>
                      <div class="invalid-feedback">
                        Sila masukkan Umur.
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="Alamatsaksi2 ">Alamat Saksi 2:</label>
                      <input type="text" class="form-control" id="Alamatsaksi2 " required>
                      <small class="form-text text-muted">Sila masukkan Alamat</small>
                      <div class="invalid-feedback">
                        Sila masukkan Alamat.
                      </div>
                    </div>

                    <div class="col-md-5">
                      <label for="NoTelsaksi2">No Telefon Saksi 2</label>
                      <input type="text" class="form-control" id="NoTelsaksi2" pattern="[0-9]{11}"required>
                      <small class="form-text text-muted">Sila masukkan No telefon</small>
                      <div class="invalid-feedback">
                        Sila masukkan Nombor Tel yang sah.
                      </div>
                    </div>

                    <div class="col-5">
                      <label for="Lafaz">Lafaz Ta'liq</label>
                      <input type="text" class="form-control" id="Lafaz" required>
                      <div class="invalid-feedback">
                        SilaLafaz Ta'liq
                      </div>
                    </div>


                    <style>
                      .float-right {
                        float: right;
                      }
                    </style>

                    <label for="inputField" class="float-right">Sila isi semua ruangan diatas</label>


                    <div class="col-12 d-flex justify-content-center mt-3">
                      <a class="btn btn-success " href="{{ route('user.MaklumatPerkahwinan') }}">Kembali</a>
                      <a class="btn btn-success " href="{{ route('user.MaklumatPerkahwinan3') }}">Seterusnya</a>
                    </div>
                    
                  


                  </form>
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
