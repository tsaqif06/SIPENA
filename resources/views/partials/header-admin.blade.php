{{--  <!-- ======= Header ======= -->  --}}
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">
        <h1 class="logo me-auto">
            <a href="/" class="logo me-auto"><img src="assets/img/logosipenafinal.png" alt=""
                    class="img-fluid" /></a>
        </h1>

        <nav id="navbar" class="navbar">
            <ul>
                <li>
                    <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard">Dasbor</a>
                </li>
                <li>
                    <a class="nav-link {{ Request::is('ruang') ? 'active' : '' }}" href="/ruang">Rekap Ruang</a>
                </li>
                <li>
                <li><a class="nav-link {{ Request::is('rekapbayar') ? 'active' : '' }}" href="/rekapbayar">Rekap
                        Pembayaran</a>
                </li>
                <li>
                    <a class="nav-link {{ Request::is('pengguna') ? 'active' : '' }}" href="/pengguna">Tabel
                        Pengguna</a>
                </li>
                <li>
                    <a class="nav-link {{ Request::is('pengajuan') ? 'active' : '' }}" href="/pengajuan">Pengajuan
                        Sewa</a>
                </li>
                <li>
                    <a class="nav-link {{ Request::is('ketentuan') ? 'active' : '' }}" href="/ketentuan">Ketentuan</a>
                </li>
                <li>
                    <form action="/logout" method="post">
                        @csrf
                        <button class="getstarted logout" type="submit">KELUAR</button>
                    </form>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        {{--  <!-- .navbar -->  --}}
    </div>
</header>
{{--  <!-- End Header -->  --}}
