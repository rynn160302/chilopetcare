<div class="mb-3">
    <label for="booking_id" class="form-label">Booking Name</label>
    <select name="booking_id" id="booking_id" class="form-select" required>
        @forelse ($bookings as $booking)
            <option value="{{ $booking->id }}" @if ($booking->id === $payment->booking_id) selected @endif>{{ $booking->name }}</option>
        @empty
            <option value="" disabled>No data booking</option>
        @endforelse
    </select>
</div>
<div class="row">
    <div class="col-6">
        <div class="mb-3">
            <label for="name" class="form-label">Atas nama</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Masukan nama penransfer" value="{{ old('name') ?? $payment->name }}" required />
        </div>
    </div>
    <div class="col-6">
        <div class="mb-3">
            <label for="bank_id" class="form-label">Transfer ke</label>
            <select name="bank_id" id="bank_id" class="form-select" required>
                @forelse ($banks as $bank)
                    <option value="{{ $bank->id }}" @if ($bank->id === $payment->bank_id) selected @endif>{{ $bank->owner }} - {{ $bank->account_number }}({{ $bank->name }})</option>
                @empty
                    <option value="" disabled>No data bank</option>
                @endforelse
            </select>
        </div>
    </div>
</div>
<div class="mb-3">
    <label for="amount" class="form-label">Jumlah</label>
    <input type="number" name="amount" id="amount" class="form-control" value="{{ old('amount') ?? $payment->amount }}" required />
</div>
<div class="mb-3">
    <label for="invoice" class="form-label">Bukti Pembayaran</label>
    <input type="file" name="invoice" class="form-control" id="invoice">
</div>
