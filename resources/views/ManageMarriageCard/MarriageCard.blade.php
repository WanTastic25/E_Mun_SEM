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
        <br>
        <h5 style="color: rgb(254, 253, 253);">Kad Nikah dan Sijil</h5>
        <br>
        <div class="container text-left">
          <div class="row ">
            <div class="col">
              <div class="border border-5 p-3 rounded-end rounded-start">
                <h5 class="text-center" style="color: white">Permohonan Kad Nikah dan Sijil</h5>
                <form action="" method="" class="row g-3 needs-validation" novalidate>
                  <!--form for name-->
                  <div class="col-md-7">
                    <label for="namesuami">Nama Suami:</label>
                    <input type="text" class="form-control" id="namesuami" required>
                    <small class="form-text text-muted">Sila masukkan Nama Penuh.</small>
                    <div class="invalid-feedback">
                      Sila masukkan Nama.
                    </div>

                  </div>

                  <div class="col-md-7">
                    <label for="name">Nama Isteri:</label>
                    <input type="text" class="form-control" id="name" placeholder="Sila Masukkan Nama Penuh*"
                      required>
                    <div class="invalid-feedback">
                      Sila masukkan Nama.
                    </div>

                  </div>
                  <div class="col-md-4">
                    <label for="tarikhmohon">Tarikh Mohon</label>
                    <input type="date" class="form-control" name="tarikhmohon" id="tarikhmohon">
                  </div>
                  <div class="col-md-4">
                    <label for="tarikhTerima">Tarikh Terima</label>
                    <input type="date" class="form-control" name="tarikhTerima" id="tarikTerima">
                  </div>

                  <div class="col-md-6">
                    <label for="pemohonan">No. Pemohonan Online:</label>
                    <input type="text" class="form-control" id="pemohonan"required>
                  </div>
                  <div class="col-md-6">
                    <label for="AkuanTerima">No.Akuan Terima:</label>
                    <input type="text" class="form-control" id="AkuanTerima" required>
                  </div>
                  <div class="col-md-6">
                    <label for="Pendaftaran">Status Pendaftaran Nikah:</label>
                    <input type="text" class="form-control" id="Pendaftaran" required>
                  </div>
                  <div class="col-md-4">
                    <label for="Pendaftaran">No.Resit Bayaran:</label>
                    <div class="input-group">
                      {{-- print--}}
                      <input type="text" class="form-control" id="Pendaftaran" required>
                      <button class="btn" onclick="printReceipt()"><i class="fa-solid fa-print fa-xl"></i></button>
                    </div>
                    <div class="invalid-feedback">
                      Sila masukkan Nombor Sijil
                    </div>

                    

                    <div class="col-md-6">
                      <label for="PilihanPenghantaran">Pilihan Penghantaran:</label>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                          value="option1">
                        <label class="form-check-label" for="inlineRadio1">COD</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                          value="option2">
                        <label class="form-check-label" for="inlineRadio2">Pungutan di Pejabat</label>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <label for="alamatPenghantaran">Alamat Penghantaran:</label>
                      <input type="text" class="form-control" id="alamatPenghantaran"
                        placeholder="Sila Masukkan Alamat Semasa*" required>
                      <div class="invalid-feedback">
                        Sila masukkan Alamat.
                      </div>
                    </div>

                    <div class="col-12 mt-3">
                      <!-- Add margin-bottom to create spacing -->
                      <a class="btn btn-success " href="{{ route('user.MarriageCard2') }}">Simpan</a>
                      
                </form>
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
    </div>
  @endsection
