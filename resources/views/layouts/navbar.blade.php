<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
<div class="container">

    <a class="navbar-brand fw-bold" href="{{ route('dashboard') }}">
        🎓 Sistem Akademik
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">

        <ul class="navbar-nav me-auto">

            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    Dashboard
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('mahasiswas.index') }}">
                    Data Mahasiswa
                </a>
            </li>

        </ul>


        <ul class="navbar-nav">

            <li class="nav-item me-3 text-white d-flex align-items-center">
                👤 {{ Auth::user()->name }}
            </li>

            <li class="nav-item">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-danger btn-sm">
                        Logout
                    </button>
                </form>
            </li>

        </ul>

    </div>

</div>
</nav>
