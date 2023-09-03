@extends('layouts.admin')
@section('title', 'Data Booking')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4 d-flex justify-content-between align-items-center">
                <span>Booking</span>
                <a href="{{ route('admin.booking.create') }}" class="btn btn-primary btn-sm">Tambah</a>
            </h5>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>User</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Jumlah</th>
                            <th>Product</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($bookings as $booking)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    {{ $booking->user->name }}
                                </td>
                                <td>{{ $booking->name }}</td>
                                <td>{{ $booking->address }}</td>
                                <td>{{ $booking->formatPrice($booking->amount) }}</td>
                                <td>{{ $booking->product->name }}</td>
                                <td>{{ $booking->status }}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="{{ route('admin.booking.edit', $booking->id) }}">
                                            <i class="ti ti-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.booking.destroy', $booking->id) }}" method="post">
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
                                <td colspan="6" class="text-center">Booking tidak ada <a href="{{ route('admin.booking.create') }}">tambah disini</a>.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
