@extends('layouts.app')

@section('title', 'Detail ' . $product->name)
@section('content')
    <section class="bg-gray min-vh-100 pt-5">
        <div class="container">
            <h4 class="mb-5">Pesan Sekarang</h4>
            <div class="row">
                <div class="col-md-6">
                    <div class="card border-light shadow rounded-2">
                        <div class="card-header bg-white border-0 pt-3">
                            <h6>Form Pemesanan</h6>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('booking.create', $product->id) }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label small">Masukan <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card border-light shadow rounded-2">
                        <div class="card-body p-4">
                            <img src="{{ asset('storage/' . $product->image) }}" alt="" class="img-fluid">
                            <h5 class="mt-5">{{ $product->name }}</h5>
                            <p>{{ $product->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
