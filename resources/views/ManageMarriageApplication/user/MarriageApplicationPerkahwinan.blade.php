@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row ">
      <div class="col text-left g-5 ">
        <br>
        <h5 style="color: rgb(254, 253, 253);"> PERMOHONAN PERKAHWINAN </h5>
        <br>
        <div class="container text-left">
          <div class="row ">
            <div class="col">
              <div class="border border-5 p-3 rounded-end rounded-start" style="height: auto;">
                <h5 class="text-center" style="color: white">BORANG PERMOHONAN PERKAHWINAN</h5>
                <!--upper tab-->
                <ul class="nav dark-green nav-pills mb-4 nav-fill" id="pills-tab" role="tablist">
                  <li class="nav-item border border-white bg-dark-green" role="presentation">
                    <a class="nav-link text-white" href="{{ route('user.ApplicationPemohon') }}">Maklumat
                      Pemohon</a>
                  </li>
                  <li class="nav-item border border-white bg-dark-green" role="presentation">
                    <a class="nav-link text-white" href="{{ route('user.ApplicationPasangan') }}">Maklumat
                      Pasangan</a>
                  </li>
                  <li class="nav-item border border-white bg-dark-green" role="presentation">
                    <a class="nav-link  bg-success text-white" href="{{ route('user.ApplicationPerkahwinan') }}">Maklumat
                      Perkahwinan</a>
                  </li>
                </ul>
                <!--form for ic-->
                <div class="container" style="word-spacing: 10px;">
                  <h5 class="text-left" style="color: white">MAKLUMAT PERKAHWINAN</h5>
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
                      <h5 class="text-left" style="color: white">MAKLUMAT CADANGAN MAJLIS AKAD</h5>
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
                      <h5 class="text-left" style="color: white">MAKLUMAT WALI</h5>
                      <div class="row">
                        <div class="col-4" style="margin-left: auto; margin-right: auto;">
                          <label for="HubunganWali" class="col-sm col-form-label">Hubungan</label>
                          <select class="form-select" id="HubunganWali" required>
                            <option value="" hidden selected>Sila Pilih</option>
                            <option value="">Bapa</option>
                            <option value="">Datuk </option>
                            <option value="">Datuk sebelah bapa keatas</option>
                            <option value="">Adik beradik lelaki seibu-sebapa</option>
                            <option value="">Adik beradik lelaki sebapa</option>
                            <option value="">Anak saudara lelaki sebelah bapa seibu sebapa kebawah</option>
                            <option value="">Anak saudara lelaki sebelah bapa sebapa kebawah</option>
                            <option value="">Bapa saudara sebelah bapa seibu sebapa</option>
                            <option value="">Bapa saudara sebelah bapa sebapa</option>
                            <option value="">Anak lelaki bapa saudara sebelah bapa seibu sebapa kebawah (Sepupu lelaki)</option>
                            <option value="">Anak lelaki bapa saudara sebelah bapa sebapa kebawah (Sepupu lelaki)</option>
                            <option value="">Bapa saudara bapa seibu sebapa</option>
                            <option value="">Bapa saudara bapa sebapa</option>
                            <option value="">Anak lelaki bapa saudara bapa sebelah bapa seibu sebapa kebawah</option>
                            <option value="">Anak lelaki bapa saudara bapa sebelah bapa sebapa kebawah</option>
                            <option value="">Bapa saudara datuk sebelah bapa seibu sebapa</option>
                            <option value="">Bapa saudara datuk sebelah bapa sebapa</option>
                            <option value="">Anak lelaki bapa saudara datuk sebelah bapa seibu sebapa kebawah</option>
                            <option value="">Anak lelaki bapa saudara datuk sebelah bapa sebapa kebawah</option>
                            <option value="">Wali sultan </option>
                          </select>  
                          <label for="NamaWali" class="col-sm col-form-label">Nama Wali</label>
                          <input type="text" class="form-control" name="NamaWali" id="NamaWali">
                          <label for="IcWali" class="col-sm col-form-label">No Kad Pengenalan Wali</label>
                          <input type="text" class="form-control" name="IcWali" id="IcWali">
                          <label for="TarikhLahirWali" class="col-sm col-form-label">Tarikh Lahir Wali</label>
                          <input type="date" class="form-control" name="TarikhLahirWali" id="TarikhLahirWali">
                          <label for="UmurWali" class="col-sm col-form-label">Umur Wali</label>
                          <input type="text" class="form-control" name="UmurWali" id="UmurWali">
                   
                          <br>
                        </div>
                        <div class="col-4" style="margin-left: auto; margin-right: auto;">
                          <label for="AlamatWali" class="col-sm col-form-label">Alamat Wali</label>
                          <input type="text" class="form-control" name="AlamatWali" id="AlamatWali">  
                          <label for="NoTelefonWali" class="col-sm col-form-label">No Telefon Wali</label>
                          <input type="number" class="form-control" name="NoTelefonWali" id="NoTelefonWali">
                          <label for="TarikhNikahIbubapa" class="col-sm col-form-label">Tarikh Nikah Ibubapa</label>
                          <input type="date" class="form-control" name="TarikhNikahIbubapa" id="TarikhNikahIbubapa">
                          <label for="SijilNikahIbubapa" class="col-sm col-form-label">No Sijil Nikah Ibubapa</label>
                          <input type="text" class="form-control" name="SijilNikahIbubapa" id="SijilNikahIbubapa">
                          <label for="NamaPelulus" class="col-sm col-form-label">Nama Pelulus (Surat Sumpah)</label>
                          <input type="text" class="form-control" name="NamaPelulus" id="NamaPelulus">
                        </div>                    
                      </div>
                      <h5 class="text-left" style="color: white">MAKLUMAT SAKSI (Untuk mengesahkan borang permohonan kebenaran kahwin)</h5> 
                      <div class="row">
                        <div class="col-4" style="margin-left: auto; margin-right: auto;">
                          <label for="NamaSaksi1" class="col-sm col-form-label">Nama Saksi (1)</label>
                          <input type="text" class="form-control" name="NamaSaksi1" id="NamaSaksi1">
                          <label for="IcSaksi1" class="col-sm col-form-label">No Kad Pengenalan Saksi (1)</label>
                          <input type="number" class="form-control" name="IcSaksi1" id="IcSaksi1">
                          <label for="AlamatSaksi1" class="col-sm col-form-label">Alamat Saksi (1)</label>
                          <input type="text" class="form-control" name="Alamat" id="AlamatSaksi1">
                          <label for="NoTelSaksi1" class="col-sm col-form-label">No Telefon Saksi (1)</label>
                          <input type="text" class="form-control" name="NoTelSaksi1" id="NoTelSaksi1">
                          <label for="KategoriNikah" class="col-sm col-form-label">Kategori Nikah</label>
                          <select class="form-select" id="KategoriNikah" required>
                            <option value="" hidden selected>Sila Pilih</option>
                            <option value="1">Bukan Pernikahan Semula</option>
                            <option value="2">Pernikahan Semula</option>
                          </select>
                        </div>
                        <div class="col-4" style="margin-left: auto; margin-right: auto;">
                          <label for="NamaSaksi2" class="col-sm col-form-label">Nama Saksi (2)</label>
                          <input type="text" class="form-control" name="NamaSaksi2" id="NamaSaksi2">
                          <label for="IcSaksi2" class="col-sm col-form-label">No Kad Pengenalan Saksi (2)</label>
                          <input type="number" class="form-control" name="IcSaksi1" id="IcSaksi2">
                          <label for="AlamatSaksi2" class="col-sm col-form-label">Alamat Saksi (2)</label>
                          <input type="text" class="form-control" name="AlamatSaksi2" id="AlamatSaksi2">
                          <label for="NoTelSaksi2" class="col-sm col-form-label">No Telefon Saksi (2)</label>
                          <input type="text" class="form-control" name="NoTelSaksi2" id="NoTelSaksi2">
                        </div>
                      </div>
                <br>
                <a type="submit" class="btn btn-success float-end" href="{{ route('user.ApplicationConsent') }}">Seterusnya</a>
                <a class="btn btn-success" href="{{ route('user.ApplicationPemohon') }}">Kembali</a>
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