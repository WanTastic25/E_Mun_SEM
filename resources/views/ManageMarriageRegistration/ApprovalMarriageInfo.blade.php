@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row ">
      <div class="col text-left g-5 ">
        <br>
        <h5 style="color: rgb(254, 253, 253);">Pendaftaran Perkahwinan</h5>
        <br>
        <div class="container text-left">
          <div class="row ">
            <div class="col">
              <div style="display: flex; justify-content: center;">
                <div class="border border-5 p-3 rounded-end rounded-start" style=" width: 1000px;">
                  <h5 class="text-center" style="color: white">Pengesahan Nikah >> Senarai Pemohon >> Maklumat Kelulusan
                  </h5>
                  <div class="col-10 mt-5">
                    <label for="namasuami">Nama Suami:</label>
                    <input type="text" class="form-control" id="name" required>
                  </div>

                  <div class="col-10 mt-3">
                    <label for="namaisteri">Nama Isteri:</label>
                    <input type="text" class="form-control" id="name" required>
                  </div>

                  <div class="col-5 mt-3">
                    <label for="Tarikhmohon">Tarikh Mohon:</label>
                    <input type="date" class="form-control" id="Tarikhmohon" required>
                  </div>

                  <div class="col-5 mt-3">
                    <label for="Nopermohonan">No Pemohonan Online:</label>
                    <input type="text" class="form-control" id="Nopermohonan" required>
                  </div>

                  <div class="col-5 mt-3">
                    <label for="Noakuan">No Akuan Terima:</label>
                    <input type="text" class="form-control" id="Noakuan" required>
                  </div>

                  <div class="col-5 mt-3">
                    <label for="status">Status</label>
                    <select id="status" name="dropdown">
                      <option value="option1">LULUS</option>
                      <option value="option2">GAGAL</option>
                    </select>
                  </div>

                  <div class="col-5 mt-3">
                    <label for="tarikhlulus">Tarikh Kelulusan</label>
                    <input type="date" class="form-control" name="tariklulus" id="tarikhlulus">
                  </div>

                  <div class="col-10 mt-3 text-end">
                    <button type="submit" class="btn btn-secondary btn-with-border">Simpan</button>
                    <a href="{{ route('staff.Approval') }}" class="btn btn-secondary btn-with-border">Kembali</a>
                    <a href="{{ route('staff.ApprovalDoc') }}" class="btn btn-secondary btn-with-border">Seterusnya</a>
                  </div>
                  <style>
                    /* ...existing styles... */

                    .btn-with-border {
                      border: 2px solid black;
                      box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
                    }
                  </style>
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
