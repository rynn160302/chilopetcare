@extends('layouts.admin')
@section('title', 'data produk')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4 d-flex justify-content-between align-items-center">
                <span>Produk</span>
                <a href="{{ route('admin.product.create') }}" class="btn btn-primary btn-sm">Tambah</a>
            </h5>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Gambar</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Deskripsi</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                @if ($product->image !== null)
                                <img src="{{ asset('storage/'.$product->image) }}" class="img-fluid rounded-2" width="50" alt="{{ $product->name }}">
                                @else
                                <span class="text-muted">No Image</span>
                                @endif
                            </td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->formatPrice($product->price) }}</td>
                            <td>{{ $product->description }}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{ route('admin.product.edit', $product->id) }}">
                                        <i class="ti ti-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.product.destroy', $product->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-link d-inline text-decoration-none">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center">Produk tidak ada <a href="{{ route('admin.product.create') }}">tambah disini</a>.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
