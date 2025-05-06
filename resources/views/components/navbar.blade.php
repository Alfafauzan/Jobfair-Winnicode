<nav class="navbar navbar-expand-lg bg-body-white">
    <div class="container">
        <a href="/guest" id="homelink">
            <img src="{{ asset('images/wnn3.png') }}" alt="" width="180" height="50">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-3">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('guest-lowongankerja') ? 'active' : '' }}" href="/guest-lowongankerja" id="lowonganlink">Lowongan Kerja</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('guest-perusahaan') ? 'active' : '' }}" href="/guest-perusahaan">Perusahaan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('guest-tentangkami') ? 'active' : '' }}" href="/guest-tentangkami">Tentang Kami</a>
                </li>
            </ul>
            <ul class="navbar-nav navbar-right-section">
                <li class="nav-item dropdown ms-3">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Bahasa
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Indonesia</a></li>
                        <li><a class="dropdown-item" href="#">Bahasa Inggris</a></li>
                    </ul>
                </li>
                <div style="display: flex; gap: 2px;">
                    <li class="nav-item"><a href="#" class="btn btn-masuk ms-3">Masuk</a></li>
                    <li class="nav-item"><a href="#" class="btn btn-perusahaan ms-2">Daftar</a></li>
                </div>
            </ul>
        </div>
    </div>
</nav>
