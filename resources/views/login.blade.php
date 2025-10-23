@extends('layouts.app')

@section('title', 'Login - TokoFoto')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="height:80vh;">
  <div class="col-md-5">
    <div class="card p-4">
      <h3 class="text-center mb-3 text-primary">TokoFoto Login</h3>

      @if ($errors->any())
        <div class="alert alert-danger">
          {{ $errors->first() }}
        </div>
      @endif

      <form method="POST" action="{{ route('login.process') }}">
        @csrf
        <div class="mb-3">
          <label class="form-label">Username</label>
          <input type="text" name="username" class="form-control" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" name="password" class="form-control" required>
        </div>

        <button class="btn btn-primary w-100">Masuk</button>
      </form>
    </div>
  </div>
</div>
@endsection
