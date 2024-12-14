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
                <h5 class="text-left" style="color: white">Borang Permohonan Sesi</h5>
                <form action="" method="" class="row g-3 needs-validation" novalidate>
                  <!--form for name-->
                    
                    <div class="col-md-5">
                        <div class="row">
                            <label for="SektorPekerjaan" class="col-sm col-form-label">No. Daftar</label>
                            <select class="form-select" id="SektorPekerjaan" required>
                                <option value="" hidden selected>Sila Pilih</option>
                                <option value="1">NK23-001</option>
                            </select>
                        </div>
                        <div class="row">
                          <div class="form-group">
                            <label for="date">Tarikh:</label>
                            <input type="date" class="form-control" id="date" name="date" placeholder="Sila Pilih Tarikh" required>
                          </div>
                        </div>

                        <div class="row">
                          <label for="SektorPekerjaan" class="col-sm col-form-label">Sesi</label>
                          <select class="form-select" id="SektorPekerjaan" required>
                              <option value="" hidden selected>Sila Pilih</option>
                              <option value="1">8.00 AM- 10.00 AM</option>
                              <option value="1">10.00 AM- 12.00 PM</option>
                              <option value="1">2.00 PM- 4.00 PM</option>
                          </select>
                      </div>
                            
                            <label for="SektorPekerjaan" class="col-sm col-form-label">Cara Perjumpaan</label>
                            <select class="form-select" id="SektorPekerjaan" required>
                                <option value="" hidden selected>Sila Pilih</option>
                                <option value="1">Secara atas Talian</option>
                                <option value="2">Secara fizikal</option>
                            </select>


                        </div>
                    </div>


                    <div class="col-12 mt-3">
                      <!-- Add margin-bottom to create spacing -->
                      <a button type="submit" class="btn btn-success" role="button" href="{{route('user.ConsultationSessionStatus')}}"
                       >Hantar</a>
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
