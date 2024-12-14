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
                    <a class="nav-link bg-success text-white active" href="{{ route('user.ApplicationPemohon') }}">Maklumat
                      Pemohon</a>
                  </li>
                  <li class="nav-item border border-white bg-dark-green" role="presentation">
                    <a class="nav-link text-white" href="{{ route('user.ApplicationPasangan') }}">Maklumat
                      Pasangan</a>
                  </li>
                  <li class="nav-item border border-white bg-dark-green" role="presentation">
                    <a class="nav-link text-white" href="{{ route('user.ApplicationPerkahwinan') }}">Maklumat
                      Perkahwinan</a>
                  </li>
                </ul>
                <!--form for ic-->
                <form action="" method="post" class="row g-3 needs-validation" novalidate>
                  <div class="row">
                    <div class="col-4" style="margin-left: auto; margin-right: auto;">
                      <label for="IcPemohon" class="col-sm col-form-label">No Kad Pengenalan</label>
                      <input type="text" class="form-control" id="IcPemohon" pattern="[0-9]{12}" required>
                      <small class="form-text text-muted">Sila masukkan 12 Digit No Kad Pengenalan</small>
                      <div class="invalid-feedback">
                        Sila masukkan No Kad Pengenalan yang sah
                      </div>
                      <br>
                      <label for="NamaPemohon" class="col-sm col-form-label">Nama Pemohon</label>
                      <input type="text" class="form-control" name="NamaPemohon" id="NamaPemohon">
                      <label for="DOBPemohon" class="col-sm col-form-label">Tarikh Lahir</label>
                      <input type="date" class="form-control" name="DOBPemohon" id="DOBPemohon">
                      <label for="UmurPemohon" class="col-sm col-form-label">Umur</label>
                      <input type="date" class="form-control" name="UmurPemohon" id="UmurPemohon">
                      <div class="invalid-feedback">
                        Sila masukkan Umur
                      </div>
                      <label for="BangsaPemohon" class="col-sm col-form-label">Bangsa</label>
                      <select class="form-select" id="BangsaPemohon" required>
                        <option value="" hidden selected>Sila Pilih</option>
                        <option value="Melayu">Melayu</option>
                        <option value="Cina">Cina</option>
                        <option value="India">India</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Indonesian">Indonesian</option>
                        <option value="Arab">Arab</option>
                        <option value="Bumiputera Sabah">Bumiputera Sabah</option>
                        <option value="Bumiputera Sarawak">Bumiputera Sarawak</option>
                        <option value="Lain-lain">Lain-lain</option>
                      </select>
                      <div class="invalid-feedback">
                        Sila pilih Bangsa
                      </div>
                      <label for="WarganegaraPemohon" class="col-sm col-form-label">Warganegara</label>
                      <select class="form-select" id="WarganegaraPemohon" required>
                        <option value="" hidden selected>Sila Pilih</option>
                        <option value="Warganegara">Warganegara</option>
                        <option value="BukanWarganegara">Bukan Warganegara</option>
                      </select>
                      <div class="invalid-feedback">
                        Sila pilih Warganegara
                      </div>
                      <label for="AlamatPemohon" class="col-sm col-form-label">Alamat Pemohon</label>
                      <input type="text" class="form-control" name="AlamatPemohon" id="AlamatPemohon">
                      <label for="NoTelPemohon" class="col-sm col-form-label">No Telefon</label>
                      <input type="text" class="form-control" name="NoTelPemohon" id="NoTelPemohon">
                    </div>
                    <div class="col-4" style="margin-left: auto; margin-right: auto;">
                      <label for="TarafPendidikanPemohon" class="col-sm col-form-label">Taraf Pendidikan</label>
                      <select class="form-select" id="TarafPendidikanPemohon" required>
                        <option value="" hidden selected>Sila Pilih</option>
                        <option value="PHD">PHD</option>
                        <option value="Master">Master</option>
                        <option value="Ijazah">Ijazah</option>
                        <option value="Diploma">Diploma</option>
                        <option value="STPM">STPM/HSC/Sijil</option>
                        <option value="SPM">SPM/MCE</option>
                        <option value="PT3">PT3/PMR/SRP/LC</option>
                      </select>
                      <div class="invalid-feedback">
                        Sila pilih Taraf Pendidikan
                      </div>
                      <label for="SektorPekerjaanPemohon" class="col-sm col-form-label">Sektor Pekerjaan</label>
                      <select class="form-select" id="SektorPekerjaanPemohon" required>
                        <option value="" hidden selected>Sila Pilih</option>
                        <option value="Awam">Sektor Awam</option>
                        <option value="Swasta">Sektor Swasta</option>
                        <option value="Sendirian">Sendirian</option>
                      </select>
                      <div class="invalid-feedback">
                        Sila pilih Sektor Pekerjaan
                      </div>
                      <label for="PekerjaanPemohon" class="col-sm col-form-label">Pekerjaan</label>
                      <input type="text" class="form-control" name="PekerjaanPemohon" id="PekerjaanPemohon">
                      <div class="invalid-feedback">
                        Sila isi Pekerjaan
                      </div>
                      <label for="PendapatanPemohon" class="col-sm col-form-label">Pendapatan (RM)</label>
                      <input type="number" class="form-control" name="PendapatanPemohon" id="PendapatanPemohon">
                      <div class="invalid-feedback">
                        Sila isi Pendapatan
                      </div>
                      <label for="StatusPerkahwinanPemohon" class="col-sm col-form-label">Status Perkahwinan</label>
                      <select class="form-select" id="StatusPerkahwinanPemohon" required>
                        <option value="" hidden selected>Sila Pilih</option>
                        <option value="1">Anak Dara</option>
                        <option value="2">Balu</option>
                        <option value="3">Janda</option>
                        <option value="4">Janda Berhias</option>
                        <option value="5">Thayyib</option>
                      </select>
                      <div class="invalid-feedback">
                        Sila pilih Status Perkahwinan
                      </div>
                      <label for="StatusSbPemohon" class="col-sm col-form-label">Status Saudara Baru</label>
                      <select class="form-select" id="StatusSbPemohon" required>
                        <option value="" hidden selected>Sila Pilih</option>
                        <option value="1">Ya</option>
                        <option value="2">Tidak</option>
                      </select>
                      <div class="invalid-feedback">
                        Sila pilih Status Saudara Baru
                      </div>
                      <label for="NoSijilPemohon" class="col-sm col-form-label">No. Sijil Kursus Perkahwinan</label>
                      <input type="text" class="form-control" id="NoSijilPemohon" pattern="[0-9]{11}"required>
                      <small class="form-text text-muted">Sila masukkan No. Sijil Kursus</small>
                      <div class="invalid-feedback">
                        Sila masukkan Nombor Sijil Kursus Perkahwinan
                      </div>
                    </div>
                  </div> 
                </form>
                <br>
                <a class="btn btn-success float-end" href="{{ route('user.ApplicationPasangan') }}">Seterusnya</a>
                <br>
                <br>
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
    .float-right {
      float: right;
    }
  </style>
@endsection