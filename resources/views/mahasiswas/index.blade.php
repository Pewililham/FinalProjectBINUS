<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>

        body{
            margin:0;
            font-family:'Segoe UI',sans-serif;

            background:
            linear-gradient(
                rgba(0,0,0,0.35),
                rgba(0,0,0,0.35)
            ),
            url('{{ asset('img/bg.jpg') }}') no-repeat center center fixed;

            background-size:cover;
        }

        .overlay{
            min-height:100vh;
            padding-top:110px;
        }

        /* NAVBAR */

        .navbar-custom{
            background:rgba(255,255,255,0.95);
            box-shadow:0 5px 20px rgba(0,0,0,0.15);
        }

        .navbar-brand{
            font-weight:700;

            background:linear-gradient(
            90deg,
            #0d6efd,
            #6f42c1
            );

            -webkit-background-clip:text;
            -webkit-text-fill-color:transparent;
        }

        /* CARD */

        .premium-card{

            background:rgba(255,255,255,0.97);

            border-radius:25px;

            border:none;

            box-shadow:0 20px 45px rgba(0,0,0,0.25);

            animation:fadeIn 0.6s ease-in-out;

        }

        /* TABLE */

        .table thead{

            background:linear-gradient(
            90deg,
            #0d6efd,
            #6f42c1
            );

            color:white;

        }

        .table tbody tr{
            transition:0.25s ease;
        }

        .table tbody tr:hover{
            background-color:rgba(13,110,253,0.08);
        }

        /* BUTTON */

        .btn-primary{

            background:linear-gradient(
            90deg,
            #0d6efd,
            #6f42c1
            );

            border:none;

            border-radius:30px;

            padding:6px 18px;

            transition:0.3s;

        }

        .btn-primary:hover{

            transform:translateY(-2px);

            box-shadow:0 8px 20px rgba(0,0,0,0.25);

        }

        .btn-warning,
        .btn-danger{
            border-radius:20px;
        }

        .btn-secondary{
            border-radius:20px;
        }

        .alert-modern{

            border-radius:15px;

            border:none;

        }

        @keyframes fadeIn{

            from{
                opacity:0;
                transform:translateY(15px);
            }

            to{
                opacity:1;
                transform:translateY(0);
            }

        }

    </style>

</head>


<body>

<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg navbar-light navbar-custom fixed-top">

<div class="container">

<a class="navbar-brand">

🎓 Sistem Akademik

</a>

</div>

</nav>



<div class="overlay">

<div class="container">

<div class="card premium-card">

<!-- HEADER -->

<div class="card-header bg-transparent border-0 d-flex justify-content-between align-items-center">

<div class="d-flex align-items-center gap-3">

<a href="{{ route('dashboard') }}" class="btn btn-secondary btn-sm">

<i class="bi bi-arrow-left"></i>
Kembali

</a>

<h4 class="fw-bold text-dark mb-0">

Data Mahasiswa

</h4>

</div>


<a href="{{ route('mahasiswas.create') }}" class="btn btn-primary btn-sm">

<i class="bi bi-person-plus"></i>
Tambah Mahasiswa

</a>

</div>


<!-- BODY -->

<div class="card-body">

@if(session('success'))

<div id="success-alert" class="alert alert-success alert-dismissible fade show alert-modern shadow-sm">

{{ session('success') }}

<button type="button" class="btn-close" data-bs-dismiss="alert"></button>

</div>

@endif


<div class="table-responsive">

<table class="table align-middle table-bordered">

<thead class="text-center">

<tr>

<th>NIM</th>

<th>Nama</th>

<th>Jurusan</th>

<th>Angkatan</th>

<th width="170">

Update Data

</th>

</tr>

</thead>


<tbody>

@forelse($mahasiswas as $mhs)

<tr>

<td>{{ $mhs->nim }}</td>

<td>{{ $mhs->nama }}</td>

<td>{{ $mhs->jurusan }}</td>

<td>{{ $mhs->angkatan }}</td>

<td class="text-center">

<a href="{{ route('mahasiswas.edit',$mhs->id) }}"
class="btn btn-warning btn-sm text-white">

<i class="bi bi-pencil"></i>
Edit

</a>


<form action="{{ route('mahasiswas.destroy',$mhs->id) }}"
method="POST"
class="d-inline">

@csrf
@method('DELETE')

<button type="submit"
class="btn btn-danger btn-sm"
onclick="return confirm('Yakin ingin hapus data?')">

<i class="bi bi-trash"></i>
Delete

</button>

</form>

</td>

</tr>

@empty

<tr>

<td colspan="5" class="text-center text-muted">

Data mahasiswa masih kosong

</td>

</tr>

@endforelse

</tbody>

</table>

</div>

</div>

</div>

</div>

</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


<script>

setTimeout(function(){

let alert=document.getElementById('success-alert');

if(alert){

alert.classList.remove('show');

setTimeout(()=>alert.remove(),300);

}

},3000)

</script>


</body>
</html>
