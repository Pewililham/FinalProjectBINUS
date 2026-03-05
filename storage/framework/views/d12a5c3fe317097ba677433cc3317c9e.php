<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
    margin:0;
    font-family:'Segoe UI',sans-serif;

    background:
        linear-gradient(
            rgba(0,0,0,0.35),
            rgba(0,0,0,0.35)
        ),
        url('<?php echo e(asset('img/dashboard.jpg')); ?>');

    background-size: 500px;   /* ukuran gambar */
    background-repeat: repeat; /* perulangan */
    background-attachment: fixed;
}

        .overlay{
            min-height:100vh;
            padding-top:120px;
        }

        /* Navbar */
        .navbar-custom{
            background: rgba(255,255,255,0.95);
            box-shadow:0 5px 20px rgba(0,0,0,0.15);
        }

        .navbar-brand{
            font-weight:700;
            background: linear-gradient(90deg,#0d6efd,#6f42c1);
            -webkit-background-clip:text;
            -webkit-text-fill-color:transparent;
        }

        /* Premium Card */
        .premium-card{
            background: rgba(255,255,255,0.97);
            border-radius:25px;
            border:none;
            box-shadow:0 20px 45px rgba(0,0,0,0.25);
            animation:fadeIn 0.6s ease-in-out;
        }

        /* Buttons */
        .btn-primary{
            background: linear-gradient(90deg,#0d6efd,#6f42c1);
            border:none;
            border-radius:30px;
            padding:10px 28px;
        }

        .btn-danger{
            border-radius:30px;
        }

        .dashboard-title{
            font-weight:700;
        }

        .dashboard-text{
            font-size:16px;
            color:#6c757d;
            line-height:1.6;
        }

        .menu-box{
            border-radius:18px;
            padding:25px;
            background:linear-gradient(90deg,#0d6efd,#6f42c1);
            color:white;
            box-shadow:0 10px 30px rgba(0,0,0,0.2);
        }

        .menu-box h5{
            font-weight:600;
        }

        @keyframes fadeIn{
            from{opacity:0; transform:translateY(15px);}
            to{opacity:1; transform:translateY(0);}
        }

    </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light navbar-custom fixed-top">
    <div class="container">

        <a class="navbar-brand">
            Sistem Akademik Universitas
        </a>

        <div class="ms-auto d-flex align-items-center gap-3">

            <span class="fw-semibold">
                <?php echo e(Auth::user()->name); ?>

            </span>

            <form action="<?php echo e(route('logout')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <button class="btn btn-danger btn-sm">
                    Logout
                </button>
            </form>

        </div>

    </div>
</nav>


<div class="overlay">

<div class="container">

<div class="card premium-card">

<div class="card-body p-5">

<h3 class="dashboard-title mb-3">
Dashboard Administrasi
</h3>

<p class="dashboard-text mb-4">
Selamat datang di <b>Sistem Informasi Akademik</b>.
Dashboard ini digunakan oleh administrator untuk melakukan pengelolaan data akademik secara terpusat dan terintegrasi.
</p>

<hr class="mb-4">


<div class="menu-box">

<h5 class="mb-2">
Manajemen Data Mahasiswa
</h5>

<p class="mb-3">
Menu ini digunakan untuk melakukan pengelolaan data mahasiswa seperti penambahan, pembaruan, dan penghapusan data akademik.
</p>

<a href="<?php echo e(route('mahasiswas.index')); ?>" class="btn btn-light">
Kelola Data Mahasiswa
</a>

</div>

</div>

</div>

</div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/mahasiswa-app/resources/views/dashboard.blade.php ENDPATH**/ ?>