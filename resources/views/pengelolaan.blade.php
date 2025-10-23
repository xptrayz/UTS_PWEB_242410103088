@extends('layouts.app')

@section('title', 'Pengelolaan Produk - TokoFoto')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
  <h3>Daftar Produk</h3>
  <div>
    <span class="badge bg-primary">Total Item: {{ $totalItems }}</span>
    <span class="badge bg-secondary">Total Stok: {{ $totalStock }}</span>
  </div>
</div>

<div class="table-responsive">
  <table class="table table-hover align-middle">
    <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>Nama Produk</th>
        <th>Kategori</th>
        <th>Harga</th>
        <th>Stok</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($items as $it)
      <tr>
        <td>{{ $it['id'] }}</td>
        <td>{{ $it['nama'] }}</td>
        <td>{{ $it['kategori'] }}</td>
        <td>Rp{{ number_format($it['harga'], 0, ',', '.') }}</td>
        <td>{{ $it['stok'] }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
