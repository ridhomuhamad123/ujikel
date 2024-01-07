@extends('layouts.template')
@section('content')
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
                                    <a class="nav-link" href="{{ route('userg.create') }}">Data Guru</a>
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

        <!-- Main content area -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="jumbotron py-4 px-5">
                <h1 class="display-4">
                    Selamat datang!
                </h1>
                <hr class="my-4">
                <p>Aplikasi ini digunakan untuk mengatur/mengelola surat TU (Tata Usaha).   </p>
            </div>
        </main>
    </div>
</div>
@endsection