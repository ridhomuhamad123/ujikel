@extends('layouts.template')
@section('content')
<form action="{{ route('users.store') }}" method="POST" class="card p-5" style="margin-left:240px; width: 70%;">
    @csrf

    @if(Session::has('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label text-end">Nama :</label>
        <div class="col-sm-10"> <!-- Mengubah class col-sm-6 menjadi col-sm-4 -->
            <input type="text" class="form-control" id="name" name="name" value="{{ old ('name') }}" placeholder="Masukkan Nama">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="email" class="col-sm-2 col-form-label text-end">Email :</label>
        <div class="col-sm-10"> <!-- Mengubah class col-sm-6 menjadi col-sm-4 -->
            <input type="email" class="form-control" id="email" name="email" value="{{ old ('email') }}" placeholder="Masukkan Email">
        </div>
    </div>

    <div class="mb-3 row">
        <div class="col-sm-8 offset-sm-2"> <!-- Mengubah class col-sm-10 menjadi col-sm-8 -->
            <button type="submit" class="btn btn-primary mt-3">Tambah Data</button>
        </div>
    </div>
</form>
@endsection
