<div class="mb-3">
    <label for="name" class="form-label">Nama</label>
    <input type="text" name="name" id="name" class="form-control" placeholder="Masukan nama pemesan" value="{{ old('name') ?? $booking->name }}" required />
</div>
<div class="mb-3">
    <label for="product" class="form-label">Produk</label>
    <select name="product_id" id="product" class="form-select" required>
        @forelse ($products as $product)
            <option value="{{ $product->id }}" @if ($product->id === $booking->product_id) selected @endif>{{ $product->name }} - {{ $product->formatPrice($product->price) }}</option>
        @empty
            <option value="" disabled>Data produk tidak ada.</option>
        @endforelse
    </select>
</div>
<div class="mb-3">
    <label for="address" class="form-label">Alamat</label>
    <textarea name="address" id="address" class="form-control" placeholder="Masukan alamat pemesan" required>{{ old('address') ?? $booking->address }}</textarea>
</div>
