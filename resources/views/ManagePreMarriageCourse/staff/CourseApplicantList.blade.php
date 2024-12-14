@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

  <div class="container">
    <div class="row ">
      <div class="col text-left g-5 ">
        <br>
        <h5 style="color: rgb(254, 253, 253);">MAKLUMAT PESERTA</h5>
        <br>
        <div class="container text-left">
          <div class="row ">
            <div class="col">
              <div class="border border-5 p-3 rounded-end rounded-start" style="height: auto; width: auto;">
                <div class="border border-5 p-1 text-bg-dark rounded-end rounded-start" style="height: auto;">
                  <h5 class="text-center" style="color: white">SENARAI PESERTA</h5>
                </div>
                <div class="container">
                  <table class="table" id="ApplicantListTable">
                    <br>
                  <thead>
                      <tr >
                        <th>Bil</th>
                        <th>Tarikh Mohon</th>
                        <th>Nama Peserta</th>
                        <th>No Kad Pengenalan</th>
                        <th>Siri</th>
                        <th>Status</th>
                        <th>Operasi</th>
                        </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>20/12/2019</td>
                      <td>Siti Binti Sharir</td>
                      <td>000202022222</td>
                      <td>KTN/0001/2019</td>
                      <td>Diluluskan</td>

                      <td>
                        <a class="btn" href=""><i class="fa-solid fa-file-circle-check fa-sm " ></i></a>
                        <a class="btn" ><i class="fa-solid fa-trash-can fa-sm"  ></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>12/12/2021</td>
                      <td>Hasniah Aulie</td>
                      <td>011998012234</td>
                      <td>KTN/0346/2021</td>
                      <td>Diluluskan</td>

                      <td>
                        <a class="btn" href=""><i class="fa-solid fa-file-circle-check fa-sm " ></i></a>
                        <a class="btn" ><i class="fa-solid fa-trash-can fa-sm"  ></i></a>
                      </td>
                    </tr>

                      <!-- Add more table rows here -->
                  </tbody>
                  </table>
              </div>
                  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
                  <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>   
                  <script>
                      $(document).ready(function() {
                          $('#ApplicantListTable').DataTable();
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
  </style>
@endsection
