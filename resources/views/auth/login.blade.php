<!DOCTYPE html>
<html>
<head>

<title>Login | Sistem Akademik</title>

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
        url('{{ asset('img/bglogin.jpg') }}') no-repeat center center fixed;

    background-size: cover;
}

/* center layout */

.wrapper{
    min-height:100vh;
    display:flex;
    align-items:center;
    justify-content:center;
}


/* premium login card */

.login-card{
    width:420px;
    background:rgba(255,255,255,0.96);
    border:none;
    border-radius:25px;
    box-shadow:0 25px 50px rgba(0,0,0,0.35);
    padding:40px;
    animation:fadeIn .6s ease;
}

/* title */

.system-title{
    font-weight:700;
    font-size:20px;

    background:linear-gradient(90deg,#0d6efd,#6f42c1);
    -webkit-background-clip:text;
    -webkit-text-fill-color:transparent;
}

.login-title{
    font-weight:600;
}

/* input */

.form-control{
    border-radius:12px;
    padding:10px;
}


/* button */

.btn-primary{
    background:linear-gradient(90deg,#0d6efd,#6f42c1);
    border:none;
    border-radius:30px;
    padding:10px;
    font-weight:500;
}

.btn-primary:hover{
    transform:translateY(-2px);
    box-shadow:0 8px 20px rgba(0,0,0,0.25);
}


/* link */

a{
    text-decoration:none;
}


/* animation */

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


<div class="wrapper">

<div class="login-card">

<div class="text-center mb-4">

<div class="system-title mb-2">
Sistem Akademik
</div>

<h4 class="login-title">
Portal Administrator
</h4>

<p class="text-muted small">
Silakan login untuk mengakses sistem manajemen akademik
</p>

</div>


@if(session('error'))

<div class="alert alert-danger text-center">
{{ session('error') }}
</div>

@endif


<form method="POST" action="{{ route('login.post') }}">
@csrf

<div class="mb-3">

<label class="form-label">
Email
</label>

<input type="email"
name="email"
class="form-control"
placeholder="Masukkan email"
required>

</div>


<div class="mb-4">

<label class="form-label">
Password
</label>

<input type="password"
name="password"
class="form-control"
placeholder="Masukkan password"
required>

</div>


<button class="btn btn-primary w-100">
Login
</button>


<p class="text-center mt-4 small">

Belum memiliki akun?

<a href="{{ route('register') }}">
Daftar disini
</a>

</p>

</form>

</div>

</div>

</body>
</html>
