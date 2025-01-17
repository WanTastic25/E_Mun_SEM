@extends('layouts.app')

@section('content')

  
<article>
    <div class="container">
        <!-- The Title -->
        <div class="row">
            <div class="col text-left g-5">
                <br>
                <h5 style="color: rgb(254, 253, 253);">Khidmat Nasihat</h5>
                <br>
                <!-- Content -->
                <div class="container text-left">
                    <div class="row">
                        <div class="table" id="infoTable">
                            <div class="border border-5 p-3 rounded-end rounded-start" style="height: auto;">
                                <ul class="nav nav-pills mb-4 nav-fill" id="pills-tab" role="tablist">
                                    <li class="nav-item bg-dark-green border border-white" role="presentation">
                                      <a class="nav-link text-white border border-black" >Maklumat
                                        Pemohon
                                      </a>
                                      <p>Nama Pemohon: AHMAD AIMAN BIN ADAM</p>
                                      <p>No. IC:990125060617</p>
                                      <p>Alamat: No 4, Jalan Harmoni,Taman Harmoni, 
                                        26600 Pekan Pahang </p>
                                      <p>No. Phone:0196973197</p>
                                    </li>
                                    <li class="nav-item border bg-dark-green border-white " role="presentation">
                                        <a class="nav-link text-white border border-black">Maklumat Pasangan</a>
                                        <p>Nama Pasangan:FATIMAH ZAHRA BINTI MANAF</p>
                                      <p>No. IC:990611102390</p>
                                      <p>Alamat:No 4, Jalan Harmoni,Taman Harmoni, 
                                        26600 Pekan Pahang</p>
                                      <p>No. Phone: 0196367182</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="container">
        
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label text-white" for="flexCheckChecked">
                        Jika Maklumat Diatas adalah benar dan terkini
                    </label>
                </div>
                
                <div class="button">
                    <a class="btn btn-primary" href="{{route('user.ConsultationApplicationStatus')}}" role="button">Kembali</a>
                    <a class="btn btn-primary disabled-link" href="{{route('user.ConsultationComplaint')}}" role="button" id="btn">Seterusnya</a>
                </div>
                
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const checkbox = document.getElementById("flexCheckChecked");
                        const btn = document.getElementById("btn");
                        
                        // Initial state
                        checkbox.checked = false;
                        btn.classList.add('disabled-link');
                        
                        // Prevent click when disabled
                        btn.addEventListener('click', function(e) {
                            if (!checkbox.checked) {
                                e.preventDefault();
                                return false;
                            }
                        });
                        
                        // Toggle disabled state
                        checkbox.addEventListener("change", function() {
                            if (this.checked) {
                                btn.classList.remove('disabled-link');
                            } else {
                                btn.classList.add('disabled-link');
                            }
                        });
                    });
                </script>
                
                
                
                
                
                
                </div>
            </div>
        </div>
    </div>
</article>
<footer>
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
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
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
  p{
    font-size: 15px;
    text-align: left;
  }

  .disabled-link {
    pointer-events: none;
    opacity: 0.6;
    cursor: not-allowed;
  }
</style>



@endsection
