<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'TokoFoto')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    html, body {
      height: 100%;
      margin: 0;
    }

    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      background-color: #f8f9fa;
      font-family: "Poppins", sans-serif;
    }

    main {
      flex: 1;
    }

    .navbar {
      background: linear-gradient(90deg, #0d6efd, #6610f2);
    }

    .card {
      border-radius: 1rem;
      box-shadow: 0 0.4rem 1rem rgba(0,0,0,0.1);
    }

    footer {
      margin-top: auto;
    }
  </style>
</head>
<body>
  {{-- Navbar tampil hanya jika sudah login --}}
  @if(session('username'))
    <x-navbar />
  @endif

  <main class="container my-4">
    @yield('content')
  </main>

  @include('components.footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
