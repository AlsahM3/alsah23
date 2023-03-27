<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <style>
        body {
            background-image: url('vendor/adminlte/dist/img/bg.jpg');
            background-attachment: fixed;
            background-size: cover;
            background-size: 100% 100%;
        }

        .header-logo img {
            width: 65px;
            height: 50px;
        }

        li {
            margin-left: 5px;
        }

        main {
            position: absolute;
            top: 40%;
            width: 100%;
            text-align: center;
        }

        p {
            font-size: 20px;
        }
    </style>

    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4  navbar-light bg-light">
      <div class="header-logo">
      <a href="" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
      <img  src="vendor/adminlte/dist/img/log0.png"/>
      <h4>PENMAS</h4>
        <svg class="bi me-2" width="80" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
      </a>
      </div>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#" class="nav-link px-2 text-dark bg-light">Home</a></li>
        <li><a href="#" class="nav-link px-2 text-dark bg-light">Features</a></li>
        <li><a href="#" class="nav-link px-2 text-dark bg-light">Pricing</a></li>
        <li><a href="#" class="nav-link px-2 text-dark bg-light">FAQs</a></li>
        <li><a href="#" class="nav-link px-2 text-dark bg-light">About</a></li>
      </ul>

      <div class="col-md-3 text-end">
        @if (Route::has('login'))
        @auth
        <button type="button" class="btn btn-outline-primary me-2"  >
        <a href="{{ url('/home') }}">
        Home
        </a>
        </button>
        @else
        <button type="button" class="btn btn-outline-primary me-2"  href="{{ url('login') }}">
        <a href="{{ url('/home') }}">
        Login
        </a>
        </button>
        
        @if (Route::has('register'))
        <button type="button" class="btn btn-primary">
        <a href="{{ route('register') }}" class="text-light">
        Sign Up
        </a>
        </button>
      </div>
        @endif
        @endauth
        @endif
    </header>

    <div class="d-flex align-content-center text-light">
    <main class="px-3 ">
    <h1 class="d-flex justify-content-center">PENMAS</h1>
    <h3>Layanan Pengaduan Online Masyarakat</h3>
    <p class="d-flex justify-content-center">Sampaikan pengaduan atau keluhan mengenai pelayanan publik tertentu melalui kami.</p>
    <p >
      <a href="{{ route('login') }}" class="btn btn-lg btn-light fw-bold border-white bg-white">Buat Pengaduan</a>
    </p>
  </main>
  </div>

</body>
</html>