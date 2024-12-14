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
                    <a class="nav-link text-white" href="{{ route('user.ApplicationHiv') }}">Permohonan Ujian Saringan HIV</a>
                  </li>
                  <li class="nav-item border border-white bg-dark-green" role="presentation">
                    <a class="nav-link bg-success text-white" href="{{ route('user.ApplicationResident') }}">Akuan Pemastautinan</a>
                  </li>
                  <li class="nav-item border border-white bg-dark-green" role="presentation">
                    <a class="nav-link text-white" href="{{ route('user.ApplicationPermission') }}">Permohonan Kebenaran Berkahwin</a>
                  </li>
                  <li class="nav-item border border-white bg-dark-green" role="presentation">
                    <a class="nav-link text-white" href="{{ route('user.ApplicationChecklist') }}">Senarai Semak</a>
                  </li>
                </ul>
                <!--form -->
                <h5 class="text-left" style="color: white">BAHAGIAN A: BUTIRAN PEMOHON</h5>
                <div class="container" style="word-spacing: 10px;">
                  <div class="row">
                    <div class="col-4" style="margin-left: auto; margin-right: auto;">
                      <label for="ic" class="col-sm col-form-label">No Kad Pengenalan</label>
                      <input type="text" class="form-control" name="ic" id="ic">
                      <label for="pemohon" class="col-sm col-form-label">Nama Pemohon</label>
                      <input type="text" class="form-control" name="pemohon" id="pemohon">
                      <label for="alamat" class="col-sm col-form-label">Alamat</label>
                      <input type="text" class="form-control" name="alamat" id="alamat">
                    </div>
                    <div class="col-4" style="margin-left: auto; margin-right: auto;">
                      <label for="Jantina" class="col-sm-2 col-form-label">Jantina</label>
                      <input type="text" class="form-control" name="Jantina" id="Jantina">
                      <label for="NoTelefon" class="col-sm col-form-label">No Telefon</label>
                      <input type="text" class="form-control" name="NoTelefon" id="NoTelefon">
                      <label for="tahunMenetap" class="col-sm col-form-label">Tahun Mula Menetap</label>
                      <input type="date" class="form-control" name="tahunMenetap" id="tahunMenetap">
                      <br>
                    </div>
                    <h5 class="text-left" style="color: white">BAHAGIAN B: PERAKUAN PENGESAHAN PEMASTAUTINAN (DIISI OLEH PEGAWAI)</h5>
                    <p>Saya <input type="text" class="form-control-inline" placeholder="Nama Pegawai" aria-label="NamaPegawai"> No Kad Pengenalan <input type="text" class="form-control-inline" placeholder="IC Pegawai" aria-label="ICpegawai">
                      setelah meneliti secara terperinci, dan berpuas hati dengan yang diberikan oleh <input type="text" class="form-control-inline" placeholder="Nama Pemohon" aria-label="Nama Pemohon">  
                      Oleh yang demikian, saya mengesahkan bahawa penama di atas adalah salah seorang yang bermastautin di kawasan saya dan beliau telah berada di sini sejak <input type="number" class="form-control-inline" > bulan/tahun.  
                    </p>
                    <div class="row">
                      <div class="col-4" style="margin-left: auto; margin-right: auto;">
                        <label for="TarikhHIV" class="col-sm-2 col-form-label">Tarikh</label>
                        <input type="date" class="form-control" name="TarikhHIV" id="TarikhHIV">
                      </div>
                      <div class="col-4 mb-3" style="margin-left: auto; margin-right: auto;">
                        <label for="TTpegawai" class="col-sm col-form-label">Tandatangan, Cop Rasmi, Nama & Alamat Pegawai yang mengesahkan</label>
                        <br>
                        <p>_ _ _ _ _ _ _ _ _</p>
                      </div>
                    </div>
                  </div>
                  <button class="btn float-md-end"><i class="fa-solid fa-print fa-xl"></i></button>
                  <br>
                </div>
                <br>
                <a class="btn btn-success " href="{{ route('user.ApplicationHiv') }}" role="button">Kembali</a>
                <a class="btn btn-success float-end" href="{{ route('user.ApplicationPermission') }}" role="button">Seterusnya</a>
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
