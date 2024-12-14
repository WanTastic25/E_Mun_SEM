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
              <div class="border border-5 p-3 rounded-end rounded-start" style="height: auto;">

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

                <h6 class="text-left" style="color: white; background-color: #2F9577;">SENARAI BORANG PENDAFTARAN NIKAH DALAM NEGARA YANG PERLU
                  DICETAK</h6>
                <div class="container" style="word-spacing: 10px;">
                  <div class="row">
                    <!--form -->
                    <div class="col-12 mt-3">


                      <p><i class="fa-solid fa-print fa-xl"></i> <a href="" style="color:#000">SLIP PERMOHONAN
                          ONLINE(PENDAFTARAN
                          PERKAHWINAN)[P4-01-01] </a> </p>
                      <p><i class="fa-solid fa-print fa-xl"></i> <a href="" style="color:#000">BORANG
                          3A/3B(KEBENARAN BERKAHWIN)/BORANG 4(PERSETUJUAN DAN WAKALAH WALI)ASAL </a> </p>


                    </div>
                  </div>

                  <h6 class="text-left" style="color: white; background-color: #2F9577;">SENARAI BORANG PENDAFTARAN NIKAH DALAM NEGARA YANG PERLU
                    DIMUAT NAIK</h6>
                  <div class="row" style="margin-left: auto; margin-right: auto;">
                    <div class="col-7">
                      <label for="formFileSm" class="form-label">Slip Permohonan Online(Pendaftaran Perkahwinan)[p4-01-01]  </label>
                    </div>
                    <div class="col-2">
                      <input class="form form-control-sm" id="formFileSm" type="file">
                    </div>
                  </div>
                  <div class="row" style="margin-left: auto; margin-right: auto;">
                    <div class="col-7">
                      <label for="formFileSm" class="form-label">Borang 3A/3B(Kebenaran Berkahwin)/Borang 4 (Persetujuan dan Wakalah Wali) Asal</label>
                    </div>
                    <div class="col-2">
                      <input class="forml form-control-sm" id="formFileSm" type="file">
                    </div>
                  </div>
                  <div class="row" style="margin-left: auto; margin-right: auto;">
                    <div class="col-7">
                      <label for="formFileSm" class="form-label">Borang 5(Cacatan Akad Nikah) Asal</label>
                    </div>
                    <div class="col-2">
                      <input class="form form-control-sm" id="formFileSm" type="file">
                    </div>
                  </div>
                  <div class="row" style="margin-left: auto; margin-right: auto;">
                    <div class="col-7">
                      <label for="formFileSm" class="form-label">Gambar Berukuran Passport(Latar Belakang Putih) Bagi pengantin Lelaki Bersongkok</label>
                    </div>
                    <div class="col-2">
                      <input class="form form-control-sm" id="formFileSm" type="file">
                    </div>
                  </div>
                  <div class="row" style="margin-left: auto; margin-right: auto;">
                    <div class="col-7">
                      <label for="formFileSm" class="form-label">Gambar Berukuran Passport(Latar Belakang Putih) Bagi pengantin Perempuan Bertudung</label>
                    </div>
                    <div class="col-2">
                      <input class="form form-control-sm" id="formFileSm" type="file">
                    </div>
                  </div>

                  <div class="row" style="margin-left: auto; margin-right: auto;">
                    <div class="col-7">
                      <label for="formFileSm" class="form-label">Salinan Kad Pengenalan Saksi-Saksi Perkahwinan</label>
                    </div>
                    <div class="col-2">
                      <input class="form form-control-sm" id="formFileSm" type="file">
                    </div>
                  </div>

                  <div class="row" style="margin-left: auto; margin-right: auto;">
                    <div class="col-7">
                      <label for="formFileSm" class="form-label">Bayaran Pendaftaran RM45 (Bukti Pembayaran)</label>
                    </div>
                    <div class="col-2">
                      <input class="form form-control-sm" id="formFileSm" type="file">
                    </div>
                  </div>

                </div>
                <br>
                <a class="btn btn-success " href="{{ route('user.MaklumatPerkahwinan2') }}" role="button">Kembali</a>
                <a class="btn btn-success float-end" href="" role="button">Hantar</a>
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
