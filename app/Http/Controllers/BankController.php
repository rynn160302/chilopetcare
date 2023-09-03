<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use Illuminate\Http\Request;

class BankController extends Controller
{
    public function index()
    {
        $banks = Bank::paginate();
        return view('admin.banks.index', compact('banks'));
    }

    public function store(Request $request)
    {
        Bank::create($request->all());
        return back();
    }

    public function update(Request $request, Bank $bank)
    {
        $bank->update($request->all());
        return back();
    }

    public function destroy(Bank $bank)
    {
        $bank->delete();
        return back();
    }
}
