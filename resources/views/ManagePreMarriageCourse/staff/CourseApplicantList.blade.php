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
                        <th>Warganegara</th>
                        <th>Status</th>
                        <th>Operasi</th>
                        </tr>
                  </thead>
                  <tbody>
                    @foreach ($applicants as $index => $applicant)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $applicant->Applicant_DOB }}</td>
                            <td>{{ $applicant->user->User_Name ?? 'Unknown' }}</td>
                            <td>{{ $applicant->user->User_IC ?? 'Unknown'  }}</td>
                            <td>{{ $applicant->Applicant_Race }}</td>
                            <td>{{ $applicant->Applicant_Marital }}</td>
                            <td>
                              <form action="{{ route('staff.deleteApplicant', $applicant->Applicant_ID) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                    <button type="submit" class="btn" onclick="return confirm('Are you sure?')">
                                        <i class="fa-solid fa-trash-can fa-sm"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
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
