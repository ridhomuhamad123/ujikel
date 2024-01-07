<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pengelola Surat Tu</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
              <a class="navbar-brand" href="#">Pengelola Surat</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
              </div>
            </div>
        </nav>
        <style>
    .nav-link {
        color: black;
    }

    .dropdown-arrow {
        float: right;
    }

    #sidebar {
        position: fixed;
        top: 58px;
        left: 0;
        height: 100vh;
        width: 220px; /* Adjust the width as needed */
        z-index: 1;
        background-color: blue; /* Change the background color as needed */
    }

    #content {
        margin-left: 220px; /* Adjust the margin as needed */
    }

    .jumbotron {
        margin-top: 20px; /* Adjust the margin-top as needed */
    }
</style>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
            <div class="position-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#data-user-dropdown" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="data-user-dropdown">
                            Data User<span class="dropdown-arrow">&rsaquo;</span>
                        </a>
                        <div class="collapse" id="data-user-dropdown">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('users.home') }}">Data Staff Tata Usaha</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Data Guru</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#data-surat-dropdown" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="data-surat-dropdown">
                            Data Surat<span class="dropdown-arrow">&rsaquo;</span>
                        </a>
                        <div class="collapse" id="data-surat-dropdown">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Data Klasifikasi Surat</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Data Surat</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container mt-5">
            @yield('content')
        </div>
    
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

        @stack('script')
    </body>
</html>