<?php

namespace App\Http\Controllers;

use App\Models\Beneficiary;
use Illuminate\Http\Request;

class BeneficiaryController extends Controller
{
    public function index()
    {
        $beneficiaries = Beneficiary::all();
        return view('admin.beneficiaries.index', compact('beneficiaries'));
    }

    public function create()
    {
        return view('admin.beneficiaries.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'wallet_address' => 'required|string',
        ]);

        Beneficiary::create($request->all());
        return redirect()->route('admin.beneficiaries.index')->with('success', 'Beneficiary added successfully!');
    }

    public function edit(Beneficiary $beneficiary)
    {
        return view('admin.beneficiaries.edit', compact('beneficiary'));
    }

    public function update(Request $request, Beneficiary $beneficiary)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'wallet_address' => 'required|string',
        ]);

        $beneficiary->update($request->all());
        return redirect()->route('admin.beneficiaries.index')->with('success', 'Beneficiary updated successfully!');
    }

    public function destroy(Beneficiary $beneficiary)
    {
        $beneficiary->delete();
        return redirect()->route('admin.beneficiaries.index')->with('success', 'Beneficiary deleted successfully!');
    }
}
