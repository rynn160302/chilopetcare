<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Product;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function order(Request $request, Product $product)
    {
        return dd($request->all());
    }

    public function index()
    {
        $bookings = Booking::query()
            ->with(['user','product'])
            ->paginate();
        return view('admin.bookings.index', compact('bookings'));
    }

    public function create()
    {
        $booking = new Booking();
        $products = Product::get();
        return view('admin.bookings.add', compact(['booking','products']));
    }

    public function store(Request $request)
    {
        $product = Product::whereId($request->product_id)->firstOr(fn() => false);
        $request->user()->bookings()->create([
            'product_id' => $product->id,
            'name' => $request->name,
            'address' => $request->address,
            'amount' => $product->price,
        ]);

        return redirect()->route('admin.booking.index');
    }

    public function edit(Request $request, Booking $booking)
    {
        $products = Product::get();
        return view('admin.bookings.edit', compact(['booking', 'products']));
    }

    public function update(Request $request, Booking $booking)
    {
        $product = Product::whereId($request->product_id)->firstOr(fn() => false);
        $booking->update([
            'product_id' => $product->id,
            'name' => $request->name,
            'address' => $request->address,
            'amount' => $product->price,
        ]);

        return redirect()->route('admin.booking.index');
    }

    public function destroy(Booking $booking)
    {
        $booking->delete();
        return back();
    }
}
