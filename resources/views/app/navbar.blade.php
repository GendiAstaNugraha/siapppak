<nav class="navbar">
    <div class="container-fluid">
        <div class="d-flex">
            <button class="navbar-toggler me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasend" aria-controls="offcanvasend">
                <span class="navbar-toggler-icon"></span>
            </button>
                <img href="{{ url('/') }}" src="{{ asset('images/surabaya.png') }}" alt="{{ __('logo surabaya') }}" height="50px" class="btn border-0">
                <a href="{{ url('/') }}" class="btn border-0" style="font-family: fantasy; font-size: 20px; color: black">SIAP PPAK!</a>
        </div>

        <div class="offcanvas offcanvas-end rounded-end rounded-5" tabindex="-1" id="offcanvasend" aria-labelledby="offcanvasendLabel">
            <div class="offcanvas-header">
                <h1 class="px-5" style="font-family: fantasy">SIAP PPAK!</h1>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                @if (Route::has('login'))
                <ul class="list-group rounded-5">
                    @auth
                    <li class="list-group-item rounded-5 btn border-1 nav-link">
                        <a href="{{ route('home') }}" class="btn border-0 nav-link rounded-5" style="text-decoration:none">Dashboard</a>
                    </li>
                    @else
                    <li class="list-group-item rounded-5 btn border-1 nav-link">
                        <a href="{{ route('login') }}" class="btn border-0 nav-link rounded-5" style="text-decoration:none">Masuk</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="list-group-item rounded-5 btn border-1 nav-link">
                        <a href="{{ route('register') }}" class="btn border-0 nav-link rounded-5" style="text-decoration:none">Daftar</a>
                    </li>
                    @endif
                    @endauth
                </ul>
                @endif
                <br><hr>
                <h5>Layanan PPA</h5>
                <ul class="list-group rounded-5">
                    <li class="list-group-item rounded-5 btn border-1 nav-link">
                        <a href="#" class="btn border-0 nav-link rounded-5" style="text-decoration:none">Pengaduan Masyarakat</a>
                    </li>
                </ul>
                <ul class="list-group rounded-5">
                    <li class="list-group-item rounded-5 btn border-1 nav-link">
                        <a href="#" class="btn border-0 nav-link rounded-5" style="text-decoration:none">Penjangkauan Korban</a>
                    </li>
                </ul>
                <ul class="list-group rounded-5">
                    <li class="list-group-item rounded-5 btn border-1 nav-link">
                        <a href="#" class="btn border-0 nav-link rounded-5" style="text-decoration:none">Pengelolaan Kasus</a>
                    </li>
                </ul>
                <ul class="list-group rounded-5">
                    <li class="list-group-item rounded-5 btn border-1 nav-link">
                        <a href="#" class="btn border-0 nav-link rounded-5" style="text-decoration:none">Penampungan Sementara</a>
                    </li>
                </ul>
                <ul class="list-group rounded-5">
                    <li class="list-group-item rounded-5 btn border-1 nav-link">
                        <a href="#" class="btn border-0 nav-link rounded-5" style="text-decoration:none">Mediasi</a>
                    </li>
                </ul>
                <ul class="list-group rounded-5">
                    <li class="list-group-item rounded-5 btn border-1 nav-link">
                        <a href="#" class="btn border-0 nav-link rounded-5" style="text-decoration:none">Pendampingan Korban</a>
                    </li>
                </ul>
                <br><hr>
                <h5>Layanan Lainnya</h5>
                <ul class="list-group rounded-5">
                    <li class="list-group-item rounded-5 btn border-1 nav-link">
                        <a href="#" class="btn border-0 nav-link rounded-5" style="text-decoration:none">Cek Kesehatan Jiwa</a>
                    </li>
                </ul>
                <ul class="list-group rounded-5">
                    <li class="list-group-item rounded-5 btn border-1 nav-link">
                        <a href="#" class="btn border-0 nav-link rounded-5" style="text-decoration:none">Konsultasi Psikologi</a>
                    </li>
                </ul>
                <ul class="list-group rounded-5">
                    <li class="list-group-item rounded-5 btn border-1 nav-link">
                        <a href="#" class="btn border-0 nav-link rounded-5" style="text-decoration:none">Informasi dan Edukasi PPA</a>
                    </li>
                </ul>
                <ul class="list-group rounded-5">
                    <li class="list-group-item rounded-5 btn border-1 nav-link">
                        <a href="#" class="btn border-0 nav-link rounded-5" style="text-decoration:none">Dokumen PPA</a>
                    </li>
                </ul>
                <ul class="list-group rounded-5">
                    <li class="list-group-item rounded-5 btn border-1 nav-link">
                        <a href="#" class="btn border-0 nav-link rounded-5" style="text-decoration:none">Peta Lembaga PPA</a>
                    </li>
                </ul>
                <ul class="list-group rounded-5">
                    <li class="list-group-item rounded-5 btn border-1 nav-link">
                        <a href="#" class="btn border-0 nav-link rounded-5" style="text-decoration:none">Pemberdayaan Perempuan</a>
                    </li>
                </ul>
                <ul class="list-group rounded-5">
                    <li class="list-group-item rounded-5 btn border-1 nav-link">
                        <a href="#" class="btn border-0 nav-link rounded-5" style="text-decoration:none">Aspirasi Anak</a>
                    </li>
                </ul>
            </div>
            <!-- Example single danger button -->
<div class="btn-group dropup">
    <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
      Telp Darurat!
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">Hotline WA PPTP2A</a></li>
      <li><a class="dropdown-item" href="#">Hotline WA PUSPAGA</a></li>
    </ul>
  </div>
        </div>
    </div>

</nav>
