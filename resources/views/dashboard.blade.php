@extends('layouts.app')

@section('title', 'Dashboard - TokoFoto')

@section('content')
<div class="text-center mb-4">
  <h2 class="fw-bold">Selamat datang, {{ $username }}!</h2>
  <p class="text-muted">Kelola produk dan profil Anda dengan mudah melalui panel ini.</p>
</div>

<div class="row g-4">
  <div class="col-md-4">
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title text-primary">📷 Pengelolaan</h5>
        <p class="card-text">Kelola produk, stok, dan harga.</p>
        <a href="{{ route('pengelolaan') }}" class="btn btn-primary">Buka</a>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title text-success">👤 Profil</h5>
        <p class="card-text">Lihat dan ubah informasi akun Anda.</p>
        <a href="{{ route('profile') }}" class="btn btn-success">Lihat Profil</a>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title text-danger">🚪 Logout</h5>
        <p class="card-text">Keluar dari sistem dengan aman.</p>
        <a href="{{ route('logout') }}" class="btn btn-danger">Keluar</a>
      </div>
    </div>
  </div>
</div>
@endsection
