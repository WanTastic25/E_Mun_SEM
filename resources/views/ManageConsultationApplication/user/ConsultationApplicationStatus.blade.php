@extends('layouts.app')

@section('content')

  
<div class="container">
    <div class="row ">
        <div class="col text-left g-5 ">
            <br>
            <h5 style="color: white;">Khidmat Nasihat</h5>
            <br>
            <div class="container text-left">
                <div class="row ">
                    <div class="col">
                        <div class="border border-5 p-3 rounded-end rounded-start">
                            <h5 class="text-left" style="color: white">Permohonan Khidmat Nasihat</h5>
                            <div class="container">
                                <table class="table" id="statusTable">
                                <thead>
                                    <tr >
                                        <th>Bil</th>
                                        <th>Nama Isteri</th>
                                        <th>No. Kad Pengenalan</th>
                                        <th>No. Daftar</th>
                                        <th>Tarikh Mohon</th>
                                        <th>Status</th>
                                        <th>Operasi</th>
                                        <th>Ulasan</th>
                                        </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a class="btn" ><i class="fa-solid fa-trash fa-xl"></i>
                                            <a class="btn" ><i class="fa-solid fa-pen-to-square fa-xl"></i>
                                            <a class="btn" ><i class="fa-solid fa-eye fa-xl"></i>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                      <td>2</td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td>
                                        <a class="btn" ><i class="fa-solid fa-trash fa-xl"></i>
                                        <a class="btn" ><i class="fa-solid fa-pen-to-square fa-xl"></i>
                                        <a class="btn" ><i class="fa-solid fa-eye fa-xl"></i>
                                      </td>
                                      <td></td>
                                  </tr>
                                    <!-- Add more table rows here -->
                                </tbody>
                                </table>
                                <div class="col-12">
                                    <a class="btn btn-primary" href="{{route('user.ConsultationApplication')}}" role="button">Permohonan Baru</a>
                                </div>
                            </div>
                            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                            <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
                            <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>   
                            <script>
                                $(document).ready(function() {
                                    $('#statusTable').DataTable();
                                });
                            </script>
                        </div>
                    </div> 
                </div>
            </div>                     
        </div>     
    </div>
</div>

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasResponsive" aria-labelledby="offcanvasResponsiveLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasResponsiveLabel">
            <span class="d-none d-lg-flex">Menu</span>
            <span class="d-lg-none">e-Munakahat</span>
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasResponsive" aria-label="Close"></button>
    </div>
    
    <div class="offcanvas-body" >
        <nav class="nav nav-pills flex-column" >
            <form action="" class="d-lg-none" method="get" >
                <div class="input-group" >
                    <input class="form-control" type="text" placeholder="Search">
                    <button class="btn btn-outline-info" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </form>
            <br>
            <a class="nav-link" href="">Profile</a>
        <a class="nav-link" href="{{ route('user.terms') }}">Kursus Pra Perkahwinan</a>
        <a class="nav-link" href="{{ route('user.ApplicationPemohon')}}">Permohonan Berkahwin</a>
        <a class="nav-link" href="{{ route('user.Registerform') }}">Pendaftaran Perkahwinan</a>
        <a class="nav-link" href="{{ route('user.ConsultationApplication')}}">Khidmat Nasihat</a>
        </nav>
    </div>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                Copyright &COPY; <span id="year"></span> e-Munakahat. All Rights Reserved.
            </div>
        </div>
    </div>
    
    <script>
        const year = new Date().getFullYear()
        document.getElementById('year').innerHTML = year;
    </script>
</div>

<script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

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
