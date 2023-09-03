<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        // mengambil data dari table pegawai
        $products = Product::get();

        return view('admin.products.index', [
            'products' => $products
        ]);
    }

    public function create()
    {
        $product = new Product();
        return view('admin.products.add', compact('product'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'price' => ['required'],
            'image' => ['required'],
        ]);

        $image = $request->file('image')->store('products');

        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $image
        ]);

        return redirect()->route('admin.product.index');
    }

    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        if ($request->file('image')) {
            if ($product->image !== null) {
                Storage::delete($product->image);
            }
            $image = $request->file('image')->store('products');
        }

        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $request->file('image') ? $image : null
        ]);

        return redirect()->route('admin.product.index');
    }

    public function destroy(Product $product)
    {
        if($product->image !== null ) {
            Storage::delete($product->image);
        }
        $product->delete();
        return back();
    }
}
