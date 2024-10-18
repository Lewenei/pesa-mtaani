<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Beneficiary;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with('beneficiary')->get();
        return view('admin.transactions.index', compact('transactions'));
    }

    public function sendFunds(Request $request)
    {
        $request->validate([
            'beneficiary_id' => 'required|exists:beneficiaries,id',
            'amount' => 'required|numeric|min:1',
        ]);

        // Blockchain integration logic to send funds would go here

        Transaction::create([
            'beneficiary_id' => $request->beneficiary_id,
            'amount' => $request->amount,
            'status' => 'Pending',
        ]);

        return back()->with('success', 'Funds sent successfully!');
    }
}
