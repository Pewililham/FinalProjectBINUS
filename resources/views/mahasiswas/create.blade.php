<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: url('{{ asset('img/bg.jpg') }}') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Segoe UI', sans-serif;
        }

        .overlay {
            background: rgba(255,255,255,0.85);
            min-height: 100vh;
            padding-top: 100px;
        }

        .glass-card {
            background: rgba(255,255,255,0.75);
            backdrop-filter: blur(12px);
            border-radius: 20px;
            border: 1px solid rgba(255,255,255,0.6);
            animation: fadeIn 0.6s ease-in-out;
        }

        .navbar-custom {
            background: rgba(255,255,255,0.9);
            backdrop-filter: blur(10px);
        }

        .navbar-brand {
            color: #0d6efd !important;
        }

        .btn-primary {
            border-radius: 30px;
        }

        .btn-secondary {
            border-radius: 30px;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(15px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>

<body>

<nav class="navbar navbar-light navbar-custom fixed-top shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('mahasiswas.index') }}">
            Sistem Akademik
        </a>
    </div>
</nav>

<div class="overlay">

    <div class="container">

        <div class="card glass-card shadow border-0">

            <div class="card-header bg-transparent">
                <h4 class="fw-bold text-primary mb-0">Tambah Mahasiswa</h4>
            </div>

            <div class="card-body">

                <form action="{{ route('mahasiswas.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">NIM</label>
                        <input type="text" name="nim" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Jurusan</label>
                        <input type="text" name="jurusan" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Angkatan</label>
                        <input type="number" name="angkatan" class="form-control" required>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('mahasiswas.index') }}" class="btn btn-secondary">
                            Kembali
                        </a>

                        <button type="submit" class="btn btn-primary">
                            Simpan
                        </button>
                    </div>

                </form>

            </div>

        </div>

    </div>

</div>

</body>
</html>
