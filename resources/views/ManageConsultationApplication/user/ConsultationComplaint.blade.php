@extends('layouts.app')

@section('content')
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

  <div class="container">
    <div class="row ">
      <div class="col text-left g-5 ">
        <br>
        <h5 style="color: rgb(254, 253, 253);">Khidmat Nasihat</h5>
        <br>
        <div class="container text-left">
          <div class="row ">
            <div class="col">
              <div class="border border-5 p-3 rounded-end rounded-start">
                <h5 class="text-left" style="color: white">Borang Aduan</h5>
                <form action="" method="" class="row g-3 needs-validation" novalidate>
                  <!--form for name-->
                    
                    <div class="col-md-7">
                        <div class="row">
                            <label for="SektorPekerjaan" class="col-sm col-form-label">Jenis Aduan</label>
                            <select class="form-select" id="SektorPekerjaan" required>
                                <option value="" hidden selected>Sila Pilih</option>
                                <option value="1">Khidmat Nasihat</option>
                                <option value="2">Penceraian</option>
                                <option value="3">Wali Enggan</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="row">
                            <label for="SektorPekerjaan" class="col-sm col-form-label">Lokasi PAID</label>
                            <select class="form-select" id="SektorPekerjaan" required>
                            <option value="" hidden selected>Sila Pilih</option>
                            <option value="1">PAID Pekan</option>
                            <option value="2">PAID Kuantan</option>
                            <option value="3">PAID Rompin</option>
                            <option value="4">PAID Muadzam Shah</option>
                            <option value="5">PAID Maran</option>
                            <option value="6">PAID Jengka</option>
                            <option value="7">PAID Kuantan Barat</option>
                            <option value="8">PAID Temerloh</option>
                            <option value="9">PAID Bentong</option>
                            <option value="10">PAID Jerantut</option>
                            <option value="11">PAID Raub</option>
                            <option value="12">PAID Kuala Lipis</option>
                            <option value="13">PAID Bera</option>
                            <option value="14">PAID Cameron Highland</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="row-md-7">
                        <label for="name">Keterangan Aduan:</label>
                        <input type="text" class="form-control" id="name"{{--  placeholder="Sila Masukkan Nama Penuh* --}} required>
                        <small class="form-text text-muted">Sila beri keterangan terperinci </small>
                    </div>

                    <div class="col-12">
                      <a class="btn btn-primary" href="{{route('user.ConsultationApplicationStatus')}}" role="button">Hantar</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>


      </div>


      {{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
                <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script> --}}

      {{-- <script>
                    $(document).ready(function() {
                      $('#marriageTable').DataTable();
                    });
                  </script> --}}


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
