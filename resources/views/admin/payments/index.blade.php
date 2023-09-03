@extends('layouts.admin')
@section('title', 'Data Pembayaran')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4 d-flex justify-content-between align-items-center">
                <span>Pembayaran</span>
                <a href="{{ route('admin.payment.create') }}" class="btn btn-primary btn-sm">Tambah</a>
            </h5>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Pemesan</th>
                            <th>Jumlah</th>
                            <th>Transfer Dari</th>
                            <th>Transfer Ke</th>
                            <th>Transfer Pada</th>
                            <th>Bukti Pembayaran</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($payments as $payment)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    {{ $payment->booking->name }}
                                </td>
                                <td>{{ $payment->formatPrice($payment->amount) }}</td>
                                <td>{{ $payment->name }}</td>
                                <td>
                                    <div>{{ $payment->bank->owner }}</div>
                                    <div>{{ $payment->bank->account_number }}({{ $payment->bank->name }})</div>
                                </td>
                                <td>
                                    {{ $payment->transfer_date->format('d/m/Y') }}
                                </td>
                                <td class="text-center">
                                    @if ($payment->invoice !== null)
                                        <img src="{{ asset('storage/' . $payment->invoice) }}" class="img-fluid rounded-2" width="50" alt="{{ $payment->name }}">
                                    @else
                                        <span class="text-muted"> - </span>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="{{ route('admin.payment.edit', $payment->id) }}">
                                            <i class="ti ti-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.payment.destroy', $payment->id) }}" method="post">
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
                                <td colspan="8" class="text-center">
                                    Payment tidak ada
                                    <a href="{{ route('admin.payment.create') }}">tambah disini</a>.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
