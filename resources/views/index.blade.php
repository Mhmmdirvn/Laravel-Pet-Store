<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.min.css') }}">
</head>
<body>
    {{-- <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Active</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
      </nav> --}}


      <nav class="navbar navbar-expand-lg bg-dark navbar-dark" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('tagihan') }}">Tagihan</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>


      <div class="container-fluid">
        <h1>Mudah mencair.</h1>
        <div class="progress mb-2">
            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:23%">20%</div>
        </div>
        <br>
        <div class="alert alert-danger" role="alert">
            <p>jika anda kesulitan dalam keuangan, cairkan uang anda di sini</p>
        </div>
        <button class="btn btn-primary">Pinjam dulu 100</button>
        <button class="btn btn-outline-primary">Bayar dulu 100</button>

        <div class="row mt-3">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4>Pinjaman 20 Juta</h4>
                        <p>Dengan cicilan seumur hidup.</p>
                        <a href="" class="text-decoration-none">Cepat pinjam</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4>Pinjaman 20 Juta</h4>
                        <p>Dengan cicilan seumur hidup.</p>
                        <a href="" class="text-decoration-none">Cepat pinjam</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4>Pinjaman 20 Juta</h4>
                        <p>Dengan cicilan seumur hidup.</p>
                        <a href="" class="text-decoration-none">Cepat pinjam</a>
                    </div>
                </div>
            </div>
        </div>
      </div>




</body>
</html>
