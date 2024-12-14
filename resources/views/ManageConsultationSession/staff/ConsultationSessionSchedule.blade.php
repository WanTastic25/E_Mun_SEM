@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row ">
      <div class="col text-left g-5 ">
        <br>
        <h5 style="color: rgb(254, 253, 253);">Jadual Sesi Khidmat Nasihat</h5>
        <br>
        <div class="container text-left">
          <div class="row ">
            <div class="col">
              <div class="border border-5 p-3 rounded-end rounded-start" style="height: auto;">
                <h5 class="text-left" style="color: white">Tambah Sesi</h5>
                <!--upper tab-->
                <div class="col-4" >
                    <label for="TarikhMohon" class="col-sm col-form-label">Tarikh</label>
                    <input type="date" class="form-control" name="TarikhSesi" id="TarikhSesi">
                    <label for="waktu" class="col-sm col-form-label">Sesi</label>
                    <select class="form-select" id="waktu" required>
                      <option value="" hidden selected>Sila Pilih</option>
                      <option value="Sesi1">8.00 AM- 10.00 AM</option>
                      <option value="Sesi2">12.00 PM- 10.00 AM</option>
                      <option value="Sesi3">2.00 PM- 4.00 PM</option>
                    </select>    
                    <label for="pegawai" class="col-sm col-form-label">Nama Pegawai</label>
                    <select class="form-select" id="pegawai" required>
                      <option value="" hidden selected>Sila Pilih</option>
                      <option value="Sesi1">HUSIN BIN KAMIL</option>
                      <option value="Sesi2">AHMAD BIN SULAIMAN</option>
                      <option value="Sesi3">MARIAH BINTI SAMSUL</option>
                    </select>  
                    <br>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3" style="right: auto">Tambah Sesi</button>
                    </div> 
                </div>
                <div class="schedule">
                  <h2>Jadual staff</h2>
                  <table>
                      <thead>
                          <tr>
                              <th>Time</th>
                              <th>Nama Pegawai</th>
                              <th>Tarikh</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>8:00 AM-10.00AM</td>
                              <td>HUSIN BIN KAMIL <br> ALIA BINTI AZNAD</td>
                              <td>12/6/2023</td>
                          </tr>
                          <tr>
                              <td>12.00 PM- 10.00 AM</td>
                              <td>AHMAD BIN SULAIMAN</td>
                              <td>12/6/2023</td>
                          </tr>
                          <tr>
                              <td>2.00 PM- 4.00 PM</td>
                              <td>MARIAH BINTI SAMSUL</td>
                              <td>12/6/2023</td>
                          </tr>

                          <!-- Add more schedule rows here -->
                      </tbody>
                  </table>
              </div>
              

                <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
                <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
                <script>
                  $(document).ready(function() {
                    $('#applicationStatusTable').DataTable();
                  });
                </script>
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
    .schedule{
      font-size: 20px;
      border-block: solid black 2px;
    }

    table {
        border-collapse: collapse;
        width: 100%;
        background-color: #D2F4EA;
    }

    th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
    }
  </style>
@endsection
