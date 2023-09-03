@extends('layouts.admin')
@section('title', 'Data Produk')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4 d-flex justify-content-between align-items-center">
                <span>Bank</span>
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#tambahBank">
                    Tambah
                </button>

                <!-- Tambah Bank -->
                <div class="modal fade" id="tambahBank" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Bank</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{ route('admin.bank.store') }}" method="POST">
                                <div class="modal-body">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="owner" class="form-label">Pemilik Akun</label>
                                        <input type="text" class="form-control" name="owner" id="owner" value="{{ old('owner') }}" required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nama Bank</label>
                                        <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="account_number" class="form-label">Nomor Rekening</label>
                                        <input type="number" class="form-control" name="account_number" id="account_number" value="{{ old('account_number') }}" required />
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Kembali</button>
                                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </h5>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Pemilik Akun</th>
                            <th>Nama Bank</th>
                            <th>Nomor Rekening</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($banks as $bank)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $bank->owner }}</td>
                                <td>{{ $bank->name }}</td>
                                <td>{{ $bank->account_number }}</td>
                                <td>{{ $bank->created_at->format('d/m/Y') }}</td>
                                <td>{{ $bank->updated_at->format('d/m/Y') }}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a class="text-primary" data-bs-toggle="modal" data-bs-target="#editBank{{ $bank->id }}">
                                            <i class="ti ti-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.bank.destroy', $bank->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-link d-inline text-decoration-none">
                                                <i class="ti ti-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            <!-- Edit Bank -->
                            <div class="modal fade" id="editBank{{ $bank->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Bank</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="{{ route('admin.bank.store') }}" method="POST">
                                            <div class="modal-body">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="owner" class="form-label">Pemilik Akun</label>
                                                    <input type="text" class="form-control" name="owner" id="owner" value="{{ old('owner') ?? $bank->owner }}" required />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="name" class="form-label">Nama Bank</label>
                                                    <input type="text" class="form-control" name="name" id="name" value="{{ old('name') ?? $bank->name }}" required />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="account_number" class="form-label">Nomor Rekening</label>
                                                    <input type="number" class="form-control" name="account_number" id="account_number" value="{{ old('account_number') ?? $bank->account_number }}" required />
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Kembali</button>
                                                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">Bank tidak ada <a href="{{ route('admin.bank.create') }}">tambah disini</a>.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
