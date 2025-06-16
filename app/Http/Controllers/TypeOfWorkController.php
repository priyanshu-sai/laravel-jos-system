<?php

namespace App\Http\Controllers;

use App\Models\TypeOfWork;
use Illuminate\Http\Request;

class TypeOfWorkController extends Controller
{
    public function listTypeOfWork(){
        $types = TypeOfWork::all();
        return view('layouts.app', [
            'view' => 'type_of_works.index',
            'types' => $types
        ]);
    }

    public function addTypeOfWork(){
        return view('layouts.app', [
            'view' => 'type_of_works.create',
        ]);
    }


    public function insert(Request $request){
        $request->validate([
            'name' => 'required',
            'rate' => 'required|numeric',
            'code' => 'required|unique:type_of_works',
        ]);

        TypeOfWork::create($request->all());

        return redirect()->route('list-type-of-works')->with('success', 'Type created successfully.');
    }

    public function editTypeOfWork($id){
        $type_of_work = TypeOfWork::findOrFail($id);
        return view('layouts.app', [
            'view' => 'type_of_works.edit',
            'type_of_work'=>$type_of_work
        ]);
    }

    public function update(Request $request , $id){
        $type_of_work = TypeOfWork::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'rate' => 'required|numeric',
            'code' => 'required|unique:type_of_works,code,' . $type_of_work->id,
        ]);

        $type_of_work->update($request->all());

        return redirect()->route('list-type-of-works')->with('success', 'Type updated successfully.');
    }

    public function view($id)
    {
       $type_of_work = TypeOfWork::findOrFail($id);
        return view('layouts.app', [
            'view' => 'type_of_works.view-type-of-work',
            'type_of_work'=>$type_of_work
        ]);
    }

    public function delete($id)
    {
        $type_of_work = TypeOfWork::findOrFail($id);
        $type_of_work->delete();

        return redirect()->route('list-type-of-works')->with('success', 'Type deleted successfully.');
    }
}
