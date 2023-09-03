@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Edit Booking</h5>
            <form action="{{ route('admin.booking.update', $booking->id) }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('admin.bookings._form')
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
