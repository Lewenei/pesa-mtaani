<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beneficiary;
use App\Models\Transaction;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalBeneficiaries = Beneficiary::count();
        $totalTransactions = Transaction::count();
        $totalFundsTransferred = Transaction::sum('amount');

        return view('admin.dashboard', compact('totalBeneficiaries', 'totalTransactions', 'totalFundsTransferred'));
    }
}
