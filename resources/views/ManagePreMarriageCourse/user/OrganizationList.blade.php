@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

<div class="container">
    <div class="row ">
        <div class="col text-left g-5 ">
            <br>
            <h5 style="color: white;">Kursus Pra-Perkahwinan</h5>
            <br>
            <div class="container text-left">
                <div class="row ">
                    <div class="col">
                        <div class="border border-5 p-3 rounded-end rounded-start">
                            <h5 class="text-center" style="color: white">Carian Anjuran</h5>
                            <div class="container">
                              <table class="table" id="organizationTable">
                                <thead>
                                  <tr>
                                    <th>Bil</th>
                                    <th>Anjuran</th>
                                    <th>Tempat</th>
                                    <th>Tarikh Mula</th>
                                    <th>Tarikh Tamat</th>
                                    <th>Kapasiti Peserta</th>
                                    <th>Kekosongan</th>
                                    <th>Papar Lanjut</th>
                                    <th>Daftar Penyertaan</th>
                                    </th>
                                  </tr>
                                </thead>
                                <tbody>
																	@foreach ($courses as $course)
                                  <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $course->Course_Organization }}</td>
                                    <td>{{ $course->Course_Venue }}</td>
                                    <td>{{ $course->Course_DateStart }}</td>
                                    <td>{{ $course->Course_DateEnd }}</td>
                                    <td>{{ $course->Course_Capacity }}</td>
                                    <td>{{ $course->Course_Slot }}</td>
                                    <td><a class="btn" href="{{ route('user.viewOrganization', $course->Course_ID) }}"><i class="fa-solid fa-eye fa-xl"  ></i></a></td>
                                    <td><a class="btn" href="{{ route('user.courseForm') }}"><i class="fa-solid fa-pen-to-square fa-xl"></i></a></td>
                                  </tr>
																	@endforeach
                                  <!-- Add more table rows here -->
                                </tbody>
                              </table>
                              <div class="col-12">
                                <a class="btn btn-success " href="{{ route('user.terms') }}" role="button">Kembali</a>
                              </div>
                            </div>
                            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                            <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
                            <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>   
                            <script>
                                $(document).ready(function() {
                                    $('#organizationTable').DataTable();
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
    background-color: #56BFA0;
    border-color: #D2F4EA;
}    
</style>
@endsection