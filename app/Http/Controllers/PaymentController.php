<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Booking;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::with(['booking', 'user', 'bank'])->latest()->paginate();
        return view('admin.payments.index', compact('payments'));
    }

    public function create()
    {
        $banks = Bank::where('show', true)->get();
        $bookings = Booking::get();
        $payment = new Payment();
        return view('admin.payments.add', compact(['payment', 'banks', 'bookings']));
    }

    public function store(Request $request)
    {
        $imageName = null;
        if ($request->file('invoice')) {
            $imageName = $request->file('invoice')->store('invoices');
        }
        $request->user()->payments()->create([
            'booking_id' => $request->booking_id,
            'bank_id' => $request->bank_id,
            'name' => $request->name,
            'amount' => $request->amount,
            'transfer_date' => $request->transfer_date,
            'invoice' => $imageName,
        ]);
        return redirect()->route('admin.payment.index');
    }

    public function edit(Payment $payment)
    {
        $banks = Bank::where('show', true)->get();
        $bookings = Booking::where('status', 'pending')->get();
        return view('admin.payments.edit', compact(['payment', 'banks', 'bookings']));
    }

    public function update(Request $request, Payment $payment)
    {
        $imageName = null;
        if ($request->file('invoice')) {
            $imageName = $request->file('invoice')->store('invoices');
        }
        $payment->create([
            'booking_id' => $request->booking_id,
            'bank_id' => $request->bank_id,
            'name' => $request->name,
            'amount' => $request->amount,
            'transfer_date' => $request->transfer_date,
            'invoice' => $imageName,
        ]);
        return redirect()->route('admin.payment.index');
    }

    public function destroy(Payment $payment)
    {
        if ($payment->invoice !== null) {
            Storage::delete($payment->invoice);
        }
        $payment->delete();
        return back();
    }
}
