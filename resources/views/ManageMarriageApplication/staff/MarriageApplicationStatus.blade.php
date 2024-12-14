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
                <h5 class="text-center" style="color: white">BUTIRAN PERMOHONAN PERKAHWINAN</h5>
                <!--upper tab-->
              
                <!--form -->
                <div class="container dark-green" style="word-spacing: 10px;">
                  <div class="col">
                    <div class="border border-5 p-1 text-bg-dark rounded-end rounded-start" style="height: auto;">
                      <h5 class="text-left" style="color: white">BUTIRAN PEMOHON</h5>
                    </div>
                  </div>              
                  <div class="row">
                    <div class="col-4" style="margin-left: auto; margin-right: auto;">
                      <label for="ic" class="col-sm col-form-label">No Kad Pengenalan</label>
                      <input type="text" class="form-control" name="ic" id="ic">
                      <label for="pemohon" class="col-sm col-form-label">Nama Pemohon</label>
                      <input type="text" class="form-control" name="pemohon" id="pemohon">
                      <label for="tarikhLahir" class="col-sm col-form-label">Tarikh Lahir</label>
                      <input type="date" class="form-control" name="tarikhLahir" id="tarikhLahir">
                      <label for="Umur" class="col-sm col-form-label">Umur</label>
                      <input type="number" class="form-control" name="Umur" id="Umur">
                      <label for="NoTelefon" class="col-sm col-form-label">No Telefon</label>
                      <input type="text" class="form-control" name="NoTelefon" id="NoTelefon">
                    </div>
                    <div class="col-4" style="margin-left: auto; margin-right: auto;">
                      <label for="Bangsa" class="col-sm col-form-label">Bangsa</label>
                      <input type="text" class="form-control" name="Bangsa" id="Bangsa">
                      <label for="Warganegara" class="col-sm col-form-label">Warganegara</label>
                      <input type="text" class="form-control" name="Warganegara" id="Warganegara">
                      <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
                      <input type="text" class="form-control" name="Alamat" id="Alamat">
                      <label for="SektorPekerjaan" class="col-sm col-form-label">Sektor Pekerjaan</label>
                      <input type="text" class="form-control" name="SektorPekerjaan" id="SektorPekerjaan">
                      <label for="Pekerjaan" class="col-sm col-form-label">Pekerjaan/Jawatan</label>
                      <input type="text" class="form-control" name="Pekerjaan" id="Pekerjaan">
                      
                    </div>
                    <div class="col-4" style="margin-left: auto; margin-right: auto;">
                      <label for="Pendapatan" class="col-sm col-form-label">Pendapatan (RM)</label>
                      <input type="number" class="form-control" name="Pendapatan" id="Pendapatan">
                      <label for="TarafPendidikan" class="col-sm col-form-label">Taraf Pendidikan</label>
                      <input type="text" class="form-control" name="TarafPendidikan" id="TarafPendidikan">
                      <label for="StatusSB" class="col-sm col-form-label">Status Saudara Baru</label>
                      <input type="date" class="form-control" name="StatusSB" id="StatusSB">
                      <label for="StatusPerkahwinan" class="col-sm col-form-label">Status Perkahwinan</label>
                      <input type="text" class="form-control" name="StatusPerkahwinan" id="StatusPerkahwinan">
                    </div>
                  </div>
                  <br> 
                  <div class="col">
                    <div class="border border-5 p-1 text-bg-dark rounded-end rounded-start" style="height: auto;">
                      <h5 class="text-left" style="color: white">BUTIRAN PASANGAN</h5>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-4" style="margin-left: auto; margin-right: auto;">
                      <label for="icPasangan" class="col-sm col-form-label">No Kad Pengenalan</label>
                      <input type="text" class="form-control" name="icPasangan" id="icPasangan">
                      <label for="NamaPasangan" class="col-sm col-form-label">Nama Pasangan</label>
                      <input type="text" class="form-control" name="NamaPasangan" id="NamaPasangan">
                      <label for="TarikhLahirPasangan" class="col-sm col-form-label">Tarikh Lahir</label>
                      <input type="date" class="form-control" name="TarikhLahirPasangan" id="TarikhLahirPasangan">
                      <label for="UmurPasangan" class="col-sm col-form-label">Umur</label>
                      <input type="number" class="form-control" name="UmurPasangan" id="UmurPasangan">
                      <label for="NoTelefonPasangan" class="col-sm col-form-label">No Telefon</label>
                      <input type="text" class="form-control" name="NoTelefonPasangan" id="NoTelefonPasangan">
                    <br>
                    </div>
                    <div class="col-4" style="margin-left: auto; margin-right: auto;">
                      <label for="BangsaPasangan" class="col-sm col-form-label">Bangsa</label>
                      <input type="text" class="form-control" name="BangsaPasangan" id="BangsaPasangan">
                      <label for="WarganegaraPasangan" class="col-sm col-form-label">Warganegara</label>
                      <input type="text" class="form-control" name="WarganegaraPasangan" id="WarganegaraPasangan">
                      <label for="AlamatPasangan" class="col-sm-2 col-form-label">Alamat</label>
                      <input type="text" class="form-control" name="AlamatPasangan" id="AlamatPasangan">
                      <label for="SektorPekerjaanPasangan" class="col-sm col-form-label">Sektor Pekerjaan</label>
                      <input type="text" class="form-control" name="SektorPekerjaanPasangan" id="SektorPekerjaanPasanganPasangan">
                      <label for="PekerjaanPasangan" class="col-sm col-form-label">Pekerjaan/Jawatan</label>
                      <input type="text" class="form-control" name="PekerjaanPasangan" id="PekerjaanPasangan"> 
                    </div>
                    <div class="col-4" style="margin-left: auto; margin-right: auto;">
                      <label for="PendapatanPasangan" class="col-sm col-form-label">Pendapatan (RM)</label>
                      <input type="number" class="form-control" name="PendapatanPasangan" id="PendapatanPasangan">
                      <label for="TarafPendidikanPasangan" class="col-sm col-form-label">Taraf Pendidikan</label>
                      <input type="text" class="form-control" name="TarafPendidikanPasangan" id="TarafPendidikanPasangan">
                      <label for="StatusSBPasangan" class="col-sm col-form-label">Status Saudara Baru</label>
                      <input type="date" class="form-control" name="StatusSBPasangan" id="StatusSBPasangan">
                      <label for="StatusPerkahwinanPasangan" class="col-sm col-form-label">Status Perkahwinan</label>
                      <input type="text" class="form-control" name="StatusPerkahwinanPasangan" id="StatusPerkahwinanPasangan">
                    </div>
                  </div> 
                  <div class="col">
                    <div class="border border-5 p-1 text-bg-dark rounded-end rounded-start" style="height: auto;">
                      <h5 class="text-left" style="color: white">MAKLUMAT PERKAHWINAN</h5>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-4" style="margin-left: auto; margin-right: auto;">
                      <label for="pemohon" class="col-sm col-form-label">Nama Pemohon</label>
                      <input type="text" class="form-control" name="pemohon" id="pemohon">
                      <label for="NamaPasangan" class="col-sm col-form-label">Nama Pasangan</label>
                      <input type="text" class="form-control" name="NamaPasangan" id="NamaPasangan">
                    </div>

                    <div class="col-4" style="margin-left: auto; margin-right: auto;">
                      <label for="TarikhMohon" class="col-sm col-form-label">Tarikh Mohon</label>
                      <input type="date" class="form-control" name="TarikhMohon" id="TarikhMohon">
                      <label for="Negara" class="col-sm col-form-label">Negara</label>
                      <select class="form-select" id="Negara" required>
                        <option value="" hidden selected>Sila Pilih</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Singapura">Singapura</option>
                        <option value="Brunei">Brunei</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Vietnam">Vietnam</option>
                        <option value="Laos">Laos</option>
                        <option value="Kamboja">Kamboja</option>
                        <option value="Myanmar">Myanmar</option>
                      </select>         
                    </div>
                  </div>
                  <br>
                  <div class="col">
                    <div class="border border-5 p-1 text-bg-dark rounded-end rounded-start" style="height: auto;">
                      <h5 class="text-left" style="color: white">MAKLUMAT CADANGAN MAJLIS AKAD</h5>
                    </div>
                  </div> 
                      <div class="row">
                        <div class="col-4" style="margin-left: auto; margin-right: auto;">
                          <label for="tarikh" class="col-sm col-form-label">Tarikh Akad Nikah</label>
                          <input type="date" class="form-control" name="tarikh" id="tarikh">
                          <label for="TempatKahwin" class="col-sm col-form-label">Alamat Tempat Kahwin</label>
                          <input type="text" class="form-control" name="TempatKahwin" id="TempatKahwin">
                          <label for="JenisMasKahwin" class="col-sm col-form-label">Jenis Mas Kahwin</label>
                          <select class="form-select" id="JenisMasKahwin" required>
                            <option value="" hidden selected>Sila Pilih</option>
                            <option value="Tunai">Tunai</option>
                            <option value="Hutang">Hutang</option>
                          </select>  
                          <br>
                        </div>
                        <div class="col-4" style="margin-left: auto; margin-right: auto;">
                          <label for="MasKahwin" class="col-sm col-form-label">Mas Kahwin (RM)</label>
                          <input type="number" class="form-control" name="MasKahwin" id="MasKahwin">
                          <label for="Hantaran" class="col-sm col-form-label">Hantaran (RM)</label>
                          <input type="number" class="form-control" name="Hantaran" id="Hantaran">
                          <label for="Pemberian" class="col-sm col-form-label">Pemberian Lain</label>
                          <input type="text" class="form-control" name="Pemberian" id="Pemberian">
                        </div>
                      </div>            
                      </div>
                      <br>
                      <a type="button" class="btn btn-secondary float-start" role="button" href="{{ route('staff.ApplicationList') }}">Kembali </a>
                      <div class="d-grid gap-2 d-md-flex justify-content-md-end">                      
                        <a class="btn btn-danger " role="button">GAGAL</a>
                        <a class="btn btn-success float-end " role="button">LULUS</a>
                      </div>
                    </div>
                    <br>
                </div>
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
      background-color: #ADB0B2;
      border-color: #D2F4EA;
    }
  </style>
@endsection
