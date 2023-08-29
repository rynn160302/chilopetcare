@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Tambah Produk</h5>
            <form action="{{ route('admin.product.store') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                @csrf
                @include('admin.products._form')
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection
