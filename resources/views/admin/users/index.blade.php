@extends('layouts.admin')
@section('title', 'Data User')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4 d-flex justify-content-between align-items-center">
                <span>User</span>
            </h5>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Diverifikasi Pada</th>
                            <th>Bergabung Pada</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @if ($user->email_verified_at !== null)
                                        {{ $user->email_verified_at->format('d/m/Y') }}
                                    @else
                                        <span class="badge bg-warning">Belum diverifikasi</span>
                                    @endif
                                </td>
                                <td>{{ $user->created_at->format('d/m/Y') }}</td>
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
