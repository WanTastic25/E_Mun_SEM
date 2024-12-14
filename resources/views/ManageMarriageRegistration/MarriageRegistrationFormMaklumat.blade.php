@extends('layouts.app')

@section('content')
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
                <!--form for ic-->
                <h6 class="text-left" style="color: white; background-color: #2F9577;">MAKLUMAT PERKAHWINAN</h6>
                <form action="" method="post" class="row g-3 needs-validation" novalidate>
                  <div class="col-md-4">
                    <label for="tarikhmohon">Tarikh Mohon</label>
                    <input type="date" class="form-control" name="tarikhmohon" id="tarikhmohon">
                  </div>

                  <!--form for name-->
                  <div class="col-md-7">
                    <label for="name">Nama Pemohon:</label>
                    <input type="text" class="form-control" id="name" required>
                    <small class="form-text text-muted">Sila masukkan Nama Penuh.</small>
                    <div class="invalid-feedback">
                      Sila masukkan Nama.
                    </div>

                  </div>

                  <div class="col-md-7">
                    <label for="name">Nama Pasangan:</label>
                    <input type="text" class="form-control" id="name" required>
                    <small class="form-text text-muted">Sila masukkan Nama Penuh.</small>
                    <div class="invalid-feedback">
                      Sila masukkan Nama.
                    </div>

                  </div>

                  <div class="col-md-7">
                    <label for="name">Warganegara:</label>
                    <select class="form-select" id="Negara" required>
                      <option value="" hidden selected>pilih</option>
                      <option value="1">Melayu</option>
                      <option value="2">Cina</option>
                      <option value="3">India</option>
                      <option value="4">Bangladesh</option>
                      <option value="5">Pakistan</option>
                      <option value="6">Indonesian</option>
                      <option value="7">Arab</option>
                      <option value="8">Bumiputera Sabah</option>
                      <option value="9">Bumiputera Sarawak</option>
                      <option value="10">Lain-lain</option>
                    </select>
                    <div class="invalid-feedback">
                      Sila Pilih warganegara.
                    </div>


                  </div>

                  <h6 class="text-left" style="color: white; background-color: #2F9577;">MAKLUMAT CADANGAN MAJLIS AKAD
                    NIKAH</h6>


                  <div class="col-md-4">
                    <label for="tarikh">Tarikh Akad Nikah</label>
                    <input type="date" class="form-control" name="tarikh" id="tarikh">
                  </div>

                  <div class="col-12">
                    <label for="AlamatKahwin ">Alamat Tempat Kahwin</label>
                    <input type="text" class="form-control" id="AlamatKahwin " required>
                    <small class="form-text text-muted">Sila masukkan Alamat</small>
                    <div class="invalid-feedback">
                      Sila masukkan Alamat.
                    </div>



                    <div class="col-md-4">
                      <label for="JenisMaskahwin">Jenis Mas Kahwin</label>
                      <input type="text" class="form-control" id="JenisMaskahwin" required>
                      <div class="invalid-feedback">
                        Sila masukkan Jenis Mas Kahwin.
                      </div>

                    </div>


                    <!--read only, not editable-->
                    <div class="col-2 mt-2">
                      <label for="Mas_Kahwin" class="form-label">Mas Kahwin:</label>
                      <input type="text" id="Mas_Kahwin" class="form-control" value="RM 22.50" readonly>
                      <small class="form-text text-muted">*Tetapan Mas Kahwin Bagi Negeri Pahang</small>
                    </div>

                    <div class="col-md-7">
                      <label for="Hantaran">Hantaran</label>
                      <input type="text" class="form-control" id="Hantaran" required>
                    </div>

                    <div class="col-md-7">
                      <label for="Pemberian">Pemberian Lain</label>
                      <input type="text" class="form-control" id="Pemberian" required>

                    </div>
                    
                    <style>
                      .float-right {
                        float: right;
                      }
                    </style>

                    <label for="inputField" class="float-right">Sila isi semua ruangan diatas</label>


                  </div>


                  <div class="d-flex justify-content-center mt-3">
                    <a class="btn btn-success" href="{{ route('user.MaklumatPerkahwinan2') }}">Seterusnya</a>
                  </div>

                </form>
              </div>

            </div>
          </div>

        </div>


      </div>
    </div>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasResponsive"
      aria-labelledby="offcanvasResponsiveLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasResponsiveLabel">
          <span class="d-none d-lg-flex">Menu</span>
          <span class="d-lg-none">e-Munakahat</span>
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasResponsive"
          aria-label="Close"></button>
      </div>

      <div class="offcanvas-body">
        <nav class="nav nav-pills flex-column">
          <form action="" class="d-lg-none" method="get">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search">
              <button class="btn btn-outline-info" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
          </form>
          <br>
          <a class="nav-link" href="">Profile</a>
          <a class="nav-link" href="{{ route('user.terms') }}">Kursus Pra Perkahwinan</a>
          <a class="nav-link" href="">Permohonan Berkahwin</a>
          <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="pendaftaranDropdown" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">Pendaftaran Perkahwinan</a>
            <ul class="dropdown-menu" aria-labelledby="pendaftaranDropdown">
              <li><a class="nav-link " href="{{ route('user.MarriageCard') }}">Kad Nikah</a></li>
              <li><a class="nav-link" href="{{ route('user.RegisterList') }}">Carian Pendaftaran</a></li>
            </ul>
            <a class="nav-link" href="">Khidmat Nasihat</a>

          </div>
        </nav>
      </div>

      <div class="container">
        <div class="row">
          <div class="col text-center">
            Copyright &COPY; <span id="year"></span> e-Munakahat. All Rights Reserved.
          </div>
        </div>
      </div>
      <script src="{{ mix('resources/js/validation.js') }}"></script>
      <script>
        const year = new Date().getFullYear()
        document.getElementById('year').innerHTML = year;

        // script for dropdown hover
        document.querySelectorAll('.nav-item.dropdown').forEach(function(element) {
          element.addEventListener('mouseenter', function() {
            this.querySelector('.dropdown-menu').classList.add('show');
            this.querySelector('.dropdown-toggle').setAttribute('aria-expanded', true);
          });

          element.addEventListener('mouseleave', function() {
            this.querySelector('.dropdown-menu').classList.remove('show');
            this.querySelector('.dropdown-toggle').setAttribute('aria-expanded', false);
          });
        });
      </script>
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
