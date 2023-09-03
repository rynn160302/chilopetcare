@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Edit Pembayaran</h5>
            <form action="{{ route('admin.payment.update', $payment->id) }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('admin.payments._form')
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
