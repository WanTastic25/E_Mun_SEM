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
                    <a class="nav-link text-white" href="{{ route('user.ApplicationResident') }}">Akuan Pemastautinan</a>
                  </li>
                  <li class="nav-item border border-white bg-dark-green" role="presentation">
                    <a class="nav-link bg-success text-white" href="{{ route('user.ApplicationPermission') }}">Permohonan Kebenaran Berkahwin</a>
                  </li>
                  <li class="nav-item border border-white bg-dark-green" role="presentation">
                    <a class="nav-link text-white" href="{{ route('user.ApplicationChecklist') }}">Senarai Semak</a>
                  </li>
                </ul>
                <!--form -->
                <div class="container" style="word-spacing: 10px;">
                  <h5 class="text-left" style="color: white">A: BUTIRAN PEMOHON</h5>
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
                  <!--<div class="row">
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
                        <label for="Bangsa" class="col-sm col-form-label">Bangsa</label>
                        <input type="text" class="form-control" name="Bangsa" id="Bangsa">
                        <label for="Warganegara" class="col-sm col-form-label">Warganegara</label>
                        <input type="text" class="form-control" name="Warganegara" id="Warganegara">
                        
                      </div>
                      <div class="col-4" style="margin-left: auto; margin-right: auto;">
                        <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <input type="text" class="form-control" name="Alamat" id="Alamat">
                        <label for="SektorPekerjaan" class="col-sm col-form-label">Sektor Pekerjaan</label>
                        <input type="text" class="form-control" name="SektorPekerjaan" id="SektorPekerjaan">
                        <label for="Pekerjaan" class="col-sm col-form-label">Pekerjaan/Jawatan</label>
                        <input type="text" class="form-control" name="Pekerjaan" id="Pekerjaan">
                        <label for="Pendapatan" class="col-sm-2 col-form-label">Pendapatan</label>
                        <input type="number" class="form-control" name="Pendapatan" id="Pendapatan">
                        <label for="TarafPendidikan" class="col-sm col-form-label">Taraf Pendidikan</label>
                        <input type="text" class="form-control" name="TarafPendidikan" id="TarafPendidikan">
                        <label for="StatusSB" class="col-sm col-form-label">Status Saudara Baru</label>
                        <input type="date" class="form-control" name="StatusSB" id="StatusSB">
                        <label for="StatusPerkahwinan" class="col-sm col-form-label">Status Perkahwinan</label>
                        <input type="text" class="form-control" name="StatusPerkahwinan" id="StatusPerkahwinan">
                        <br>
                      </div> -->
                      <br> 
                      <h5 class="text-left" style="color: white">B: BUTIRAN PASANGAN</h5>
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
                      <h5 class="text-left" style="color: white">C: CADANGAN MAJLIS AKAD</h5>
                      <div class="row">
                        <div class="col-4" style="margin-left">
                          <label for="tarikh" class="col-sm col-form-label">Tarikh Akad Nikah</label>
                          <input type="date" class="form-control" name="tarikh" id="tarikh">
                          <label for="TempatKahwin" class="col-sm col-form-label">Alamat Tempat Kahwin</label>
                          <input type="text" class="form-control" name="TempatKahwin" id="TempatKahwin">
                          <br>
                        </div>
                        <div class="col-4" style="margin-left">
                          <label for="MasKahwin" class="col-sm col-form-label">Mas Kahwin (RM)</label>
                          <input type="number" class="form-control" name="MasKahwin" id="MasKahwin">
                          <label for="Hantaran" class="col-sm col-form-label">Hantaran (RM)</label>
                          <input type="number" class="form-control" name="Hantaran" id="Hantaran">
                        </div>
                        <div class="col-4" style="margin-left">
                          <label for="Pemberian" class="col-sm col-form-label">Pemberian Lain</label>
                          <input type="text" class="form-control" name="Pemberian" id="Pemberian">
                        </div>
                      </div>
                      <h5 class="text-left" style="color: white">D: BUTIRAN WALI(Diisi oleh Pemohon Perempuan Sahaja)</h5>
                      <div class="row">
                        <div class="col-6" style="margin-left">
                          <label for="tarikh" class="col-sm col-form-label">Tarikh Akad Nikah</label>
                          <input type="date" class="form-control" name="tarikh" id="tarikh">
                          <label for="NamaWali" class="col-sm col-form-label">Nama Wali</label>
                          <input type="text" class="form-control" name="NamaWali" id="NamaWali">
                          <label for="TarikhLahirWali" class="col-sm col-form-label">Tarikh Lahir Wali</label>
                          <input type="date" class="form-control" name="TarikhLahirWali" id="TarikhLahirWali">
                          <label for="UmurWali" class="col-sm col-form-label">Umur Wali</label>
                          <input type="text" class="form-control" name="UmurWali" id="UmurWali">
                          <br>
                        </div>
                        <div class="col-6" style="margin-left">
                          <label for="AlamatWali" class="col-sm col-form-label">Alamat Wali</label>
                          <input type="text" class="form-control" name="AlamatWali" id="AlamatWali">
                          <label for="Hubungan" class="col-sm col-form-label">Hubungan</label>
                          <input type="number" class="form-control" name="Hubungan" id="Hubungan">
                          <label for="TarikhNikahIbubapa" class="col-sm col-form-label">Tarikh Nikah Ibubapa</label>
                          <input type="date" class="form-control" name="TarikhNikahIbubapa" id="TarikhNikahIbubapa">
                          <label for="NoTelefonWali" class="col-sm col-form-label">No Telefon Wali</label>
                          <input type="number" class="form-control" name="NoTelefonWali" id="NoTelefonWali">
                        </div>
                        <p>Persetujuan dan Pengakuan Wali :</p>
                        <p>Saya dengan ini sesungguhnya  bersetuju terhadap perkahwinan yang dicadangkan ini dan saya sesungguhnya mengaku bahawa segala maklumat yang terkandung di (Bahagian D) adalah benar 
                          dan sekiranya maklumat ini palsu, maka saya boleh didakwa dan disabitkan di bawah seksyen 38 Enakmen Udang-udang keluarge islam 2005.
                        </p>
                        <div class="row">
                          <div class="col-4" style="margin-left: auto; margin-right: auto;">
                            <label for="Tarikh" class="col-sm-2 col-form-label">Tarikh</label>
                            <input type="date" class="form-control" name="Tarikh" id="Tarikh">
                          </div>
                          <div class="col-4 mb-3" style="margin-left: auto; margin-right: auto;">
                            <label for="tarikh" class="col-sm col-form-label">Tandatangan Wali</label>
                            <br>
                            <p>_ _ _ _ _ _ _ _ _</p>
                            <br>
                          </div>
                        </div>
                      </div>
                      <h5 class="text-left" style="color: white">E: BUTIRAN SAKSI</h5> 
                      <div class="row">
                        <div class="col-4" style="margin-left: auto; margin-right: auto;">
                          <label for="NamaSaksi1" class="col-sm col-form-label">Nama Saksi (1)</label>
                          <input type="text" class="form-control" name="NamaSaksi1" id="NamaSaksi1">
                          <label for="IcSaksi1" class="col-sm col-form-label">No Kad Pengenalan Saksi (1)</label>
                          <input type="number" class="form-control" name="IcSaksi1" id="IcSaksi1">
                          <label for="AlamatSaksi1" class="col-sm col-form-label">Alamat Saksi (1)</label>
                          <input type="text" class="form-control" name="Alamat" id="AlamatSaksi1">
                          <label for="Tarikh" class="col-sm col-form-label">Tarikh</label>
                          <input type="date" class="form-control" name="Tarikh" id="Tarikh">
                          <br>
                          <label for="TTsaksi1" class="col-sm col-form-label">Tandatangan Saksi(1)</label>
                          <p>_ _ _ _ _ _ _ _ _</p>
                        </div>
                        <div class="col-4" style="margin-left: auto; margin-right: auto;">
                          <label for="NamaSaksi2" class="col-sm col-form-label">Nama Saksi (2)</label>
                          <input type="text" class="form-control" name="NamaSaksi2" id="NamaSaksi2">
                          <label for="IcSaksi2" class="col-sm col-form-label">No Kad Pengenalan Saksi (2)</label>
                          <input type="number" class="form-control" name="IcSaksi1" id="IcSaksi2">
                          <label for="AlamatSaksi2" class="col-sm col-form-label">Alamat Saksi (2)</label>
                          <input type="text" class="form-control" name="AlamatSaksi2" id="AlamatSaksi2">
                          <label for="Tarikh" class="col-sm col-form-label">Tarikh</label>
                          <input type="date" class="form-control" name="Tarikh" id="Tarikh">
                          <br>
                          <label for="TTsaksi2" class="col-sm col-form-label">Tandatangan Saksi (2)</label>
                          <p>_ _ _ _ _ _ _ _ _</p>
                        </div>
                        <p>Pengakuan Saksi :</p>
                        <p>Kami sesungguhnya mengaku bahawa segala maklumat yang dinyatakan dalam borang ini adalah benar dan sekiranya maklumat ini palsu, 
                          maka kami boleh didakwa dan disabitkan di bawah seksyen 38 enakmen undang-undang keluarge islam 2005
                        </p>
                      </div>
                      <h5 class="text-left" style="color: white">F: PENGAKUAN PEMOHON</h5> 
                        <p>1. Saya dengan ini sesungguhnya mengaku bahawa saya adalah seorang  *teruna/ duda / beristeri/ dara/ janda/ balu/ thayyib</p>
                        <p>2. Nombor Surat perakuan cerai (jika duda/janda): <br>Tarikh cerai:<br>No.Sijil Kematian(jika duda/balu): <br>Tarikh kematian:</p>
                        <p>3. Saya mengaku bahawa segala maklumat dan butiran yang dinyatakan dalam borang ini adalah benar  dan sekiranya palsu, maka saya 
                          telah melakukan satu kesalahan dan boleh disabitkan di bawah seksyen 38 enakmen undang-undang keluarga islam 2005. </p>
                          <div class="row">
                            <div class="col-4" style="margin-left: auto; margin-right: auto;">
                              <label for="Tarikh" class="col-sm-2 col-form-label">Tarikh</label>
                              <input type="date" class="form-control" name="Tarikh" id="Tarikh">
                            </div>
                            <div class="col-4 mb-3" style="margin-left: auto; margin-right: auto;">
                              <label for="TTpemohon" class="col-sm col-form-label">Tandatangan Pemohon</label>
                              <br>
                              <p>_ _ _ _ _ _ _ _ _</p>
                              <label for="TTpendaftar" class="col-sm col-form-label">Tandatangan Pendaftar/Penolong pendaftar/jurunikah dan cap rasmi</label>
                              <br>
                              <p>_ _ _ _ _ _ _ _ _</p>
                            </div>
                          </div>
                          <button class="btn float-md-end"><i class="fa-solid fa-print fa-xl"></i></button>
                          <br>
                      </div>
                      <br>
                      <a class="btn btn-success " href="{{ route('user.ApplicationResident') }}" role="button">Kembali</a>
                      <a class="btn btn-success float-end" href="{{ route('user.ApplicationChecklist') }}" role="button">Seterusnya</a>
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
      background-color: #56BFA0;
      border-color: #D2F4EA;
    }
  </style>
@endsection
