<?php

namespace App\Http\Controllers;

use App\Models\Conductor;
use Illuminate\Http\Request;

class ConductorController extends Controller
{
    public function listConductor()
    {
        $conductors = Conductor::all();
        return view('layouts.app', [
            'view' => 'conductors.index',
            'conductors' => $conductors
        ]);
    }

    public function addConductor()
    {
        return view('layouts.app', [
            'view' => 'conductors.create'
        ]);
    }

    public function insert(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'staff_id' => 'required',
            'email' => 'nullable|email|unique:conductors',
            'phone_number' => 'nullable|unique:conductors',
            'department_name' => 'required',
        ]);

        Conductor::create($request->all());

        return redirect()->route('list-conductors')->with('success', 'Conductor added successfully.');
    }

    public function editConductor($id)
    {
        $conductor = Conductor::findOrFail($id);
        return view('layouts.app', [
            'view' => 'conductors.edit',
            'conductor' => $conductor
        ]);
    }

    public function update(Request $request, $id)
    {
        $conductor = Conductor::findOrFail($id);

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'staff_id' => 'required',
            'email' => 'nullable|email|unique:conductors,email,' . $id,
            'phone_number' => 'nullable|unique:conductors,phone_number,' . $id,
            'department_name' => 'required',
        ]);

        $conductor->update($request->all());

        return redirect()->route('list-conductors')->with('success', 'Conductor updated successfully.');
    }

    public function delete($id)
    {
        $conductor = Conductor::findOrFail($id);
        $conductor->delete();

        return redirect()->route('list-conductors')->with('success', 'Conductor deleted successfully.');
    }

    public function view($id)
    {
        $conductor = Conductor::findOrFail($id);
        return view('layouts.app', [
            'view' => 'conductors.view',
            'conductor' => $conductor
        ]);
    }
}
