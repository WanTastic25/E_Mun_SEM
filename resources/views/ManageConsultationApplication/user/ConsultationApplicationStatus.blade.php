@extends('layouts.app')

@section('content')
<style>
    .table th {
        text-align: center;
    }
</style>
  
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
                                        <th>Created at</th>
                                        </tr>
                                </thead>
                                <tbody>
                                    @foreach($applications as $application)
                                        <tr>
                                            <td>{{ $loop->iteration}}</td>
                                            <td>{{ $application->wife_name }}</td>
                                            <td>{{ $application->wife_ic }}</td>
                                            <td>{{ $application->registration_no }}</td>
                                            <td>{{ $application->application_date }}</td>
                                            <td>{{ $application->status }}</td>
                                            <td>
                                                <form action="{{ route('user.deleteApplication', $application->id) }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn" onclick="return confirm('Are you sure you want to delete this application?')">
                                                        <i class="fa-solid fa-trash fa-l"></i>
                                                    </button>
                                                </form>
                                                <button type="button" class="btn" onclick="editApplication(
                                                    '{{ $application->id }}',
                                                    '{{ $application->wife_name }}',
                                                    '{{ $application->wife_ic }}',
                                                    '{{ $application->registration_no }}',
                                                    '{{ $application->complaint_detail }}'
                                                )">
                                                    <i class="fa-solid fa-pen-to-square fa-large"></i>
                                                </button>
                                            </td>
                                            <td>{{ $application->complaint_detail }}</td>
                                            <td>{{ $application->created_at }}</td>
                                        </tr>
                                    @endforeach
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

<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Application</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editForm" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="wife_name" class="form-label">Nama Isteri</label>
                        <input type="text" class="form-control" id="wife_name" name="wife_name">
                    </div>
                    <div class="mb-3">
                        <label for="wife_ic" class="form-label">No. Kad Pengenalan</label>
                        <input type="text" class="form-control" id="wife_ic" name="wife_ic">
                    </div>
                    <div class="mb-3">
                        <label for="registration_no" class="form-label">No. Daftar</label>
                        <input type="text" class="form-control" id="registration_no" name="registration_no">
                    </div>
                    <div class="mb-3">
                        <label for="complaint_detail" class="form-label">Ulasan</label>
                        <textarea class="form-control" id="complaint_detail" name="complaint_detail"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
function editApplication(id, wife_name, wife_ic, registration_no, complaint_detail) {
    const form = document.getElementById('editForm');
    form.action = `/consultation/update/${id}`;
    
    document.getElementById('wife_name').value = wife_name;
    document.getElementById('wife_ic').value = wife_ic;
    document.getElementById('registration_no').value = registration_no;
    document.getElementById('complaint_detail').value = complaint_detail;
    
    const modal = new bootstrap.Modal(document.getElementById('editModal'));
    modal.show();
}

document.getElementById('editForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    fetch(this.action, {
        method: 'POST',
        body: new FormData(this),
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            window.location.reload();
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
});
</script>
@endsection
