@extends('layouts.app')

@section('title', 'Profil - TokoFoto')

@section('content')
<h3 class="mb-4 text-center">Profil Pengguna</h3>

<div class="card mx-auto" style="max-width:500px;">
  <div class="card-body text-center">
    <img src="https://via.placeholder.com/100" class="rounded-circle mb-3" alt="Avatar">
    <h4 class="fw-bold">{{ $profile['name'] }}</h4>
    <p class="text-muted">{{ $profile['role'] }}</p>
    <p><strong>Email:</strong> {{ $profile['email'] }}</p>
  </div>
</div>
@endsection
