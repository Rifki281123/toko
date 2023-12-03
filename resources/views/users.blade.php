<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KLS | {{ $page['title'] }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/style.css') }}">
    
    {{-- Trix editor --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    {{-- Akhir Trix editor --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <style>
           trix-toolbar [data-trix-button-group="file-tools"]{
             display: none
           }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-black bg-gradient border-bottom border-body" data-bs-theme="dark">
        <div class="container">
          <a class="navbar-brand" href="#">KLS STORE</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link " href="#">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Presensi</a>
              </li>
              <li class="nav-item dropdown-center">
                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Produk
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Produk Ready</a></li>
                  <li><a class="dropdown-item" href="#">Produk Kosong</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown-center">
                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Aduan
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Aduan Pelanggan</a></li>
                  <li><a class="dropdown-item" href="#">Aduan Karyawan</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Edit Akun</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="main mt-5">
        <div class="mt-5 container">
          @includeWhen($page['halaman'] == 15 , 'users.beranda')
        </div>
      </div>
  {{-- Akhir Bagian Utama --}}
   
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/script.js') }}"></script>
  </body>
</html>