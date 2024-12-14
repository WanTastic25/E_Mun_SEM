@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row ">
      <div class="col text-left g-5 ">
        <br>
        <h5 style="color: rgb(254, 253, 253);">Pendaftaran Perkahwinan</h5>
        <br>
        <div class="container text-left">
          <div class="row ">
            <div class="col">
              <div style="display: flex; justify-content: center;">
                <div class="border border-5 p-3 rounded-end rounded-start" style=" width: 1000px;">
                  <h5 class="text-center" style="color: white">Pengesahan Nikah >> Senarai Pemohon >> Maklumat Kelulusan>> Muat Turun Dokument
                  </h5>
                  <div class="row">
                    <div class="col-md-6">
                      <label for="namasuami" class="form-label">Nama Suami:</label>
                      <input type="text" class="form-control" id="namasuami" required>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <label for="namaisteri" class="form-label">Nama Isteri:</label>
                      <input type="text" class="form-control" id="namaisteri" required>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <label for="Noakuan" class="form-label">No Akuan Terima:</label>
                      <input type="text" class="form-control" id="Noakuan" required>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <label for="status" class="form-label">Status Permohonan:</label>
                      <input type="text" class="form-control" id="status" required>
                    </div>
                  </div>

                  <div class="border border-5 p-3 mt-5 rounded-end rounded-start" style="width: 600px;">
                  <div class="row" style="margin-left: auto; margin-right: auto;">
                    <div class="col-6 mt-4">
                      <label for="formFileSm" class="form-label"> Senarai Semak  </label>
                    </div>
                    <div class="col-2 mt-4">
                      <a class="btn btn-link"> <i class="fa-solid fa-download fa-lg"></i> </a>
                    </div>
                  </div>

                  <div class="row" style="margin-left: auto; margin-right: auto;">
                    <div class="col-6 mt-4">
                      <label for="formFileSm" class="form-label">Slip Akuan Terima  </label>
                    </div>
                    <div class="col-2 mt-4">
                      <a class="btn btn-link"> <i class="fa-solid fa-download fa-lg"></i> </a>
                    </div>
                  </div>


                  <div class="row" style="margin-left: auto; margin-right: auto;">
                    <div class="col-6 mt-4">
                      <label for="formFileSm" class="form-label">Borang Permohonan(JAIP-UKI-13 pin.2019)  </label>
                    </div>
                    <div class="col-2 mt-4">
                      <a class="btn btn-link"> <i class="fa-solid fa-download fa-lg"></i> </a>
                    </div>
                  </div>
                  
                  <div class="row" style="margin-left: auto; margin-right: auto;">
                    <div class="col-6 mt-4">
                      <label for="formFileSm" class="form-label">Akuan Sumpah ( JAIP-UKI-07 pin.2019)  </label>
                    </div>
                    <div class="col-2 mt-4">
                      <a class="btn btn-link"> <i class="fa-solid fa-download fa-lg"></i> </a>
                    </div>
                  </div>

                  <div class="row" style="margin-left: auto; margin-right: auto;">
                    <div class="col-6 mt-4">
                      <label for="formFileSm" class="form-label">Borang Akuan Permastautin (Suami)  </label>
                    </div>
                    <div class="col-2 mt-4">
                      <a class="btn btn-link"> <i class="fa-solid fa-download fa-lg"></i> </a>
                    </div>
                  </div>

                  <div class="row" style="margin-left: auto; margin-right: auto;">
                    <div class="col-6 mt-4">
                      <label for="formFileSm" class="form-label">Borang Akuan Permastautin (Isteri)  </label>
                    </div>
                    <div class="col-2 mt-4">
                      <a class="btn btn-link"> <i class="fa-solid fa-download fa-lg"></i> </a>
                    </div>
                  </div>

                  <div class="row" style="margin-left: auto; margin-right: auto;">
                    <div class="col-6 mt-4">
                      <label for="formFileSm" class="form-label">Borang Ujian Saringan HIV (Suami)  </label>
                    </div>
                    <div class="col-2 mt-4">
                      <a class="btn btn-link"> <i class="fa-solid fa-download fa-lg"></i> </a>
                    </div>
                  </div>

                  <div class="row" style="margin-left: auto; margin-right: auto;">
                    <div class="col-6 mt-4">
                      <label for="formFileSm" class="form-label">Borang Ujian Saringan HIV (Isteri)  </label>
                    </div>
                    <div class="col-2 mt-4">
                      <a class="btn btn-link"> <i class="fa-solid fa-download fa-lg"></i> </a>
                    </div>
                  </div>

                  <div class="row" style="margin-left: auto; margin-right: auto;">
                    <div class="col-6 mt-4">
                      <label for="formFileSm" class="form-label">Surat Litup Mahkamah(Permohonan Pengesahan Kahwin Tanpa Kebenaran) </label>
                    </div>
                    <div class="col-2 mt-4">
                      <a class="btn btn-link"> <i class="fa-solid fa-download fa-lg"></i> </a>
                    </div>
                  </div>
                </div>

                <div class="col-10 mt-3 text-end">
                  <a href="{{ route('staff.ApprovalInfo') }}" class="btn btn-secondary btn-with-border">Kembali</a>        
                </div>

                  
                  <style>
                    body {
                      background-image: url("img/bg.jpg");
                      background-size: cover;
                    }

                    .btn-with-border {
                      border: 2px solid black;
                      box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
                    }
                    .border {
                      border: 5px solid #000;
                      background-color: #ADB0B2;
                      border-color: #D2F4EA;
                    }
                  </style>
                @endsection
              
