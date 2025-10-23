<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <a class="navbar-brand fw-bold" href="{{ route('dashboard') }}">TokoFoto</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      @if(session('username'))
      <ul class="navbar-nav me-auto">
        <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('pengelolaan') }}">Pengelolaan</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('profile') }}">Profile</a></li>
      </ul>
      <span class="navbar-text me-3 text-white">👋 {{ session('username') }}</span>
      <a href="{{ route('logout') }}" class="btn btn-outline-light btn-sm">Logout</a>
      @endif
    </div>
  </div>
</nav>
