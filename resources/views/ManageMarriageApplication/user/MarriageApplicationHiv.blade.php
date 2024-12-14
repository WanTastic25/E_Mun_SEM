@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row ">
      <div class="col text-left g-5 ">
        <br>
        <h5 style="color: rgb(254, 253, 253);">PERMOHONAN PERKAHWINAN</h5>
        <br>
        <div class="container text-left">
          <div class="row ">
            <div class="col">
              <div class="border border-5 p-3 rounded-end rounded-start" style="height: auto;">
                <h5 class="text-center" style="color: white">BORANG PERMOHONAN PERKAHWINAN</h5>
                <!--upper tab-->
                <ul class="nav dark-green nav-pills mb-4 nav-fill" id="pills-tab" role="tablist">
                  <li class="nav-item border border-white bg-dark-green" role="presentation">
                    <a class="nav-link text-white" href="{{ route('user.ApplicationConsent') }}">Persetujuan dan Wakalah Wali</a>
                  </li>
                  <li class="nav-item border border-white bg-dark-green" role="presentation">
                    <a class="nav-link bg-success text-white" href="{{ route('user.ApplicationHiv') }}">Permohonan Ujian Saringan HIV</a>
                  </li>
                  <li class="nav-item border border-white bg-dark-green" role="presentation">
                    <a class="nav-link text-white" href="{{ route('user.ApplicationResident') }}">Akuan Pemastautinan</a>
                  </li>
                  <li class="nav-item border border-white bg-dark-green" role="presentation">
                    <a class="nav-link text-white" href="{{ route('user.ApplicationPermission') }}">Permohonan Kebenaran Berkahwin</a>
                  </li>
                  <li class="nav-item border border-white bg-dark-green" role="presentation">
                    <a class="nav-link text-white" href="{{ route('user.ApplicationChecklist') }}">Senarai Semak</a>
                  </li>
                </ul>
                <!--form -->
                <h5 class="text-left" style="color: white">BAHAGIAN 1: (DIISI OLEH PEMOHON)</h5>
                <div class="container" style="word-spacing: 10px;">
                  <p>Saya <input type="text" class="form-control-inline" placeholder="Nama Pemohon" aria-label="Nama Pemohon"> Alamat <input type="text" class="form-control-inline" placeholder="Alamat" aria-label="Alamat"> 
                    No Kad Pengenalan <input type="text" class="form-control-inline" placeholder="IC" aria-label="Ic"> No Telefon <input type="text" class="form-control-inline" placeholder="No Telefon" aria-label="noTel"> 
                    dengan ini  BERSETUJU / TIDAK BERSETUJU secara sedar dan 
                    tanpa sebarang paksaan untuk menjalani ujian saringan HIV dan ujian-ujian lain yang 
                    berkaitan, memaklumkan keputusan ujian saringan HIV kepada pasangan dan menjalani sesi 
                    kaunseling bersama pasangan sekiranya diperlukan.
                  </p>
                  <div class="row">
                    <div class="col-4" style="margin-left: auto; margin-right: auto;">
                      <label for="TarikhHIV" class="col-sm-2 col-form-label">Tarikh</label>
                      <input type="date" class="form-control" name="TarikhHIV" id="TarikhHIV">
                    </div>
                    <div class="col-4 mb-3" style="margin-left: auto; margin-right: auto;">
                      <label for="TTpemohon" class="col-sm col-form-label">Tandatangan Pemohon</label>
                      <br>
                      <p>_ _ _ _ _ _ _ _ _</p>
                      <br>
                    </div>
                  </div>
                  <h5 class="text-left" style="color: white">BAHAGIAN 2: (DIISI OLEH PENGAMAL PERUBATAN KERAJAAN)</h5>
                  <p>Klinik Kesihatan <input type="text" class="form-control-inline" placeholder="Nama Klinik Kesihatan" aria-label="namaKlinik"> Saya, Pengamal Perubatan seperti yang dinyatakan di bawah dengan ini mengesahkan 
                    bahawa ujian saringan HIV telah dilakukan terhadap Encik/ Cik <input type="text" class="form-control-inline" placeholder="Nama Pemohon" aria-label="Nama Pemohon"> di klinik ini dan keputusannya adalah _______________________________________
                    ____________________________________________________ .
                  </p>
                  <div class="row">
                    <div class="col-4" style="margin-left: auto; margin-right: auto;">
                      <label for="TarikhHIV" class="col-sm-2 col-form-label">Tarikh</label>
                      <input type="date" class="form-control" name="TarikhHIV" id="TarikhHIV">
                    </div>
                    <div class="col-4 mb-3" style="margin-left: auto; margin-right: auto;">
                      <label for="TTklinik" class="col-sm col-form-label">Tandatangan Pengamal Perubatan & Cop Jawatan</label>
                      <br>
                      <p>_ _ _ _ _ _ _ _ _</p>
                    </div>
                  </div>
                  <button class="btn float-md-end"><i class="fa-solid fa-print fa-xl"></i></button>
                    <br>
                </div>
                <br>
                <a class="btn btn-success " href="{{ route('user.ApplicationConsent') }}" role="button">Kembali</a>
                <a class="btn btn-success float-end" href="{{ route('user.ApplicationResident') }}" role="button">Seterusnya</a>
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
