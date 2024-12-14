@extends('layouts.app')

@section('content')
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
  
  {{-- style for drop-down at tab --}}
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
    <div class="row ">
      <div class="col text-left g-5 ">
        <br>
        <h5 style="color: rgb(254, 253, 253);">Pendaftaran Perkahwinan</h5>
        <br>
        <div class="container text-left">
          <div class="row ">
            <div class="col">
              <div class="border border-5 p-3 rounded-end rounded-start">
                <h5 class="text-center" style="color: white">Carian Pendaftaran Perkahwinan</h5>
                <div class="container">
                  <table class="table" id="marriageTable">
                    <thead>
                      <tr>
                        <th>Bil</th>
                        <th>No.Kad Pengenalan</th>
                        <th>No.Slip Permohonan</th>
                        <th>Tarikh Mohon</th>
                        <th>Status</th>
                        <th>Operasi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>90514015352</td>
                        <td>M3/2020-0111112</td>
                        <td>23-10-2020</td>
                        <td>TELAH HANTAR</td>
                        <td>
                          <button class="btn" onclick="navToNewForm()"><i
                              class="fa-solid fa-pen-to-square fa-xl"></i></button>
                          <script>
                            function navToNewForm() {
                              window.location.href = "{{ route('user.RegisterNewForm') }}";
                            }
                          </script>
                          <button class="btn"><i class="fa-solid fa-print fa-xl"></i></button>
                          <button class="btn"><i class="fa-solid fa-trash-can fa-xl"></i></button>

                          <script>
                            // Get a reference to the delete button
                            const deleteButton = document.getElementById('deleteButton');
                          
                            // Add an event listener to handle the button click
                            deleteButton.addEventListener('click', function() {
                              // Call the delete function here
                              deleteItem();
                            });
                          
                            // Function to handle the deletion
                            function deleteItem() {
                              // Perform the deletion logic here
                              console.log('Item deleted!');
                              // You can replace the console.log statement with your own code to delete the desired item.
                            }
                          </script>
                        </td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>90514015352</td>
                        <td>M3/2020-0112112</td>
                        <td>23-10-2020</td>
                        <td>TELAH HANTAR</td>
                        <td>
                          <button class="btn" onclick="navToNewForm()"><i
                              class="fa-solid fa-pen-to-square fa-xl"href="{{ route('user.RegisterNewForm') }}"></i></button>
                          <button class="btn"><i class="fa-solid fa-print fa-xl"></i></button>
                          <button class="btn"><i class="fa-solid fa-trash-can fa-xl"></i></button>
                        </td>
                      </tr>
                      <!-- Add more table rows here -->
                    </tbody>
                  </table>
                  <div class="col-12">
                    <button type="button" class="btn btn-success" onclick="navToForm()">Daftar Permohonan Baru </button>
                    <script>
                      function navToForm() {
                        window.location.href = "{{ route('user.Registerform') }}";
                      }
                    </script>
                  </div>
                </div>

                <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
                <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

                <script>
                  $(document).ready(function() {
                    $('#marriageTable').DataTable();
                  });
                </script>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasResponsive"
                  aria-labelledby="offcanvasResponsiveLabel">
                  <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasResponsiveLabel">
                      <span class="d-none d-lg-flex">Menu</span>
                      <span class="d-lg-none">e-Munakahat</span>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                      data-bs-target="#offcanvasResponsive" aria-label="Close"></button>
                  </div>

                  <div class="offcanvas-body">
                    <nav class="nav nav-pills flex-column">
                      <form action="" class="d-lg-none" method="get">
                        <div class="input-group">
                          <input class="form-control" type="text" placeholder="Search">
                          <button class="btn btn-outline-info" type="submit"><i
                              class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                      </form>
                      <br>
                      <a class="nav-link" href="">Profile</a>
                      <a class="nav-link" href="{{ route('user.terms') }}">Kursus Pra Perkahwinan</a>
                      <a class="nav-link" href="">Permohonan Berkahwin</a>
                      <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="pendaftaranDropdown" role="button"
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
