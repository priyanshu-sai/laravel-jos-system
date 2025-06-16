<?php

namespace App\Http\Controllers;

use App\Models\JobOrder;
use App\Models\TypeOfWork;
use App\Models\Contractor;
use App\Models\Conductor;
use Illuminate\Http\Request;

class JobOrderController extends Controller
{
    public function listJobOrders() {
        $job_orders = JobOrder::with(['typeOfWork', 'contractor', 'conductor'])->get();
        return view('layouts.app', [
            'view' => 'job_order.index',
            'job_orders' => $job_orders
        ]);
    }

    public function addJobOrder() {
        return view('layouts.app', [
            'view' => 'job_order.create',
            'types' => TypeOfWork::all(),
            'contractors' => Contractor::all(),
            'conductors' => Conductor::all(),
        ]);
    }

    public function insertJobOrder(Request $request) {
        $request->validate([
            'name' => 'required',
            'date' => 'required|date',
            'jos_date' => 'required|date',
            'type_of_work_id' => 'required|exists:type_of_works,id',
            'contractor_id' => 'required|exists:contractors,id',
            'conductor_id' => 'required|exists:conductors,id',
            'actual_work_completed' => 'required|numeric',
            'remarks' => 'nullable|string',
        ]);

        $lastId = JobOrder::max('id') + 1;
        $referenceNumber = 'JO-' . now()->format('Ym') . '-' . str_pad($lastId, 3, '0', STR_PAD_LEFT);

       JobOrder::create([
        'name' => $request->name,
        'date' => $request->date,
        'jos_date' => $request->jos_date,
        'type_of_work_id' => $request->type_of_work_id,
        'contractor_id' => $request->contractor_id,
        'conductor_id' => $request->conductor_id,
        'actual_work_completed' => $request->actual_work_completed,
        'remarks' => $request->remarks,
        'reference_number' => $referenceNumber
    ]);

        return redirect()->route('list-job-orders')->with('success', 'Job Order added successfully.');
    }

    public function editJobOrder($id) {
        $job_order = JobOrder::findOrFail($id);
        return view('layouts.app', [
            'view' => 'job_order.edit',
            'job_order' => $job_order,
            'types' => TypeOfWork::all(),
            'contractors' => Contractor::all(),
            'conductors' => Conductor::all(),
        ]);
    }

    public function updateJobOrder(Request $request, $id) {
        $job_order = JobOrder::findOrFail($id);
        $request->validate([
            'name' => 'required',
            'date' => 'required|date',
            'jos_date' => 'required|date',
            'type_of_work_id' => 'required|exists:type_of_works,id',
            'contractor_id' => 'required|exists:contractors,id',
            'conductor_id' => 'required|exists:conductors,id',
            'actual_work_completed' => 'required|numeric',
            'remarks' => 'nullable|string',
        ]);

        $job_order->update($request->all());

        return redirect()->route('list-job-orders')->with('success', 'Job Order updated successfully.');
    }

    public function deleteJobOrder($id) {
        JobOrder::findOrFail($id)->delete();
        return redirect()->route('list-job-orders')->with('success', 'Job Order deleted successfully.');
    }

    public function viewJobOrder($id) {
        $job_order = JobOrder::with(['typeOfWork', 'contractor', 'conductor'])->findOrFail($id);
        return view('layouts.app', [
            'view' => 'job_order.view',
            'job_order' => $job_order
        ]);
    }
}
