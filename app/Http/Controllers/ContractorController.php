<?php

namespace App\Http\Controllers;

use App\Models\Contractor;
use Illuminate\Http\Request;

class ContractorController extends Controller
{
    public function listContractors()
    {
        $contractors = Contractor::all();
        return view('layouts.app', [
            'view' => 'contractors.index',
            'contractors' => $contractors
        ]);
    }

    public function addContractor()
    {
        return view('layouts.app', [
            'view' => 'contractors.create'
        ]);
    }

    public function insert(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'code' => 'required|unique:contractors',
            'email' => 'required|email|unique:contractors',
            'phone_number' => 'required|unique:contractors',
            'company_name' => 'required|unique:contractors',
            'balance' => 'required|numeric',
        ]);

        Contractor::create($request->all());

        return redirect()->route('list-contractors')->with('success', 'Contractor added successfully.');
    }

    public function editContractor($id)
    {
        $contractor = Contractor::findOrFail($id);
        return view('layouts.app', [
            'view' => 'contractors.edit',
            'contractor' => $contractor
        ]);
    }

    public function update(Request $request, $id)
    {
        $contractor = Contractor::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'code' => 'required|unique:contractors,code,' . $contractor->id,
            'email' => 'required|email|unique:contractors,email,' . $contractor->id,
            'phone_number' => 'required|unique:contractors,phone_number,' . $contractor->id,
            'company_name' => 'required|unique:contractors,company_name,' . $contractor->id,
            'balance' => 'required|numeric',
        ]);

        $contractor->update($request->all());

        return redirect()->route('list-contractors')->with('success', 'Contractor updated successfully.');
    }

    public function view($id)
    {
        $contractor = Contractor::findOrFail($id);
        return view('layouts.app', [
            'view' => 'contractors.view',
            'contractor' => $contractor
        ]);
    }

    public function delete($id)
    {
        $contractor = Contractor::findOrFail($id);
        $contractor->delete();

        return redirect()->route('list-contractors')->with('success', 'Contractor deleted successfully.');
    }
}
