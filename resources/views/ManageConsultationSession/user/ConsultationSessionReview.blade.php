@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row ">
      <div class="col text-left g-5 ">
        <br>
        <h5 style="color: rgb(254, 253, 253);">Khidmat Nasihat</h5>
        <br>
        <div class="container text-left">
          <div class="row ">
            <div class="col">
              <div class="border border-5 p-3 rounded-end rounded-start" style="height: auto;">
                <h5 class="text-left" style="color: white">Ulasan Khidmat Nasihat</h5>
                <br>
                <!--upper tab-->
                <div class="col-4-center" >
                    <div class="border border-5 p-1 text-bg-dark rounded-end rounded-start" style="height: auto;">
                        <h5 class="text-left " style="color: white">Maklumat Pengadu</h5>
                        
                    </div>
                    <br>
                    <p>Nama* : NAZRIN BIN MAHARI</p>
                        <p>No. IC* : 000213060457</p>
                        <p>Alamat* : LOT 17 TAMAN RASHIDAH BALOK, KUANTAN, PAHANG</p>
                        <p>No. Phone* : 010-656 7660</p>
                    
                        <div class="col-12">
                          <p>Nama Pengawai: Maznil Bin Nazwil</p>
                          <label for="masalah">Penyataan Masalah:</label>
                          <input type="text" class="form-control" id="pegawai" value="Masalah salah faham antara pasangan ini" required>
                      </div>
                      
                        <br>
                        <div class="col-12">
                            
                            <label for="masalah">Ulasan Pengawai Penasihat:</label>
                            <input type="text" class="form-control" value="Hubungan mereka semakin baik " id="ulasan" required>
                        </div>
                        <div class="col-10 mt-3 text-end">

                            <a href="{{ route('user.ConsultationSessionStatus') }}" class="btn btn-primary btn-with-border">Kembali</a>

                        </div>
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
        background-color: #56BFA0;
        border-color: #D2F4EA;
    }    
    .col-12 {
        font-size: 20px;
    }
    
  </style>
@endsection
