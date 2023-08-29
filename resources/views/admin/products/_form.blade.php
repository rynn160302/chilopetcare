<div class="mb-3">
    <label for="name" class="form-label">Nama Produk</label>
    <input class="form-control" type="text" name="name" value="{{ old('name') ?? $product->name }}" required />
</div>
<div class="mb-3">
    <label for="price" class="form-label">Harga Produk</label>
    <input class="form-control" type="number" name="price" value="{{ old('price') ?? $product->price }}" required />
</div>
<div class="mb-3">
    <label for="image" class="form-label">Gambar Produk</label>
    <input class="form-control" type="file" name="image" />
</div>
<div class="mb-3">
    <label for="description" class="form-label">Deskripsi</label>
    <textarea class="form-control" name="description" id="description" required>{{ old('description') ?? $product->description }}</textarea>
</div>
