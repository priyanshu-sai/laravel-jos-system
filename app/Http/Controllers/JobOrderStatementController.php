<?php

namespace App\Http\Controllers;

use App\Models\JobOrder;
use App\Models\Conductor;
use App\Models\Contractor;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\JosJobOrderLink;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\JobOrderStatement;

class JobOrderStatementController extends Controller
{
    public function listJOS(Request $request)
    {
        $month = $request->input('month');
        
        $query = JobOrderStatement::query();

        if ($month) {
            $query->whereMonth('created_at', Carbon::parse($month)->format('m'))
                ->whereYear('created_at', Carbon::parse($month)->format('Y'));
        }

        $jos_list = $query->get();

        return view('layouts.app', [
            'view' => 'jos.index',
            'jos_list' => $jos_list,
        ]);
    }


    public function addJOS(Request $request)
    {
        $contractors = Contractor::all();
        $conductors = Conductor::all();
        $grouped = null;

        if ($request->filled(['month', 'contractor_id', 'conductor_id'])) {
            $month = Carbon::createFromFormat('Y-m', $request->month);

            $jobOrders = JobOrder::whereMonth('jos_date', $month->month)
                ->whereYear('jos_date', $month->year)
                ->where('contractor_id', $request->contractor_id)
                ->where('conductor_id', $request->conductor_id)
                ->whereNull('jos_id')
                ->with('typeOfWork')
                ->get();

            if ($jobOrders->count() > 0) {
                $total = 0;
                foreach ($jobOrders as $job) {
                    $total += $job->actual_work_completed * $job->typeOfWork->rate;
                }

                $grouped = [
                    'month' => $request->month,
                    'contractor_id' => $request->contractor_id,
                    'conductor_id' => $request->conductor_id,
                    'job_orders' => $jobOrders,
                    'total' => $total,
                    'count' => $jobOrders->count()
                ];
            } else {
                return redirect()->back()->with('error', 'No Job Orders matched the selected month, contractor, and conductor.');
            }
        }

        return view('layouts.app', [
            'view' => 'jos.create',
            'contractors' => $contractors,
            'conductors' => $conductors,
            'grouped' => $grouped,
        ]);
    }



    public function createJOS(Request $request)
    {
        $request->validate([
            'month' => 'required|date_format:Y-m',
            'contractor_id' => 'required|exists:contractors,id',
            'conductor_id' => 'required|exists:conductors,id',
            'paid_amount' => 'required|numeric',
            'remarks' => 'nullable|string'
        ]);



    $month = Carbon::createFromFormat('Y-m', $request->month);

    $jobOrders = JobOrder::whereMonth('jos_date', $month->month)
    ->whereYear('jos_date', $month->year)
    ->where('contractor_id', $request->contractor_id)
    ->where('conductor_id', $request->conductor_id)
    ->whereNull('jos_id')
    ->get();


        $totalAmount = 0;
        foreach ($jobOrders as $order) {
            $totalAmount += $order->actual_work_completed * $order->typeOfWork->rate;
        }

        if ($request->paid_amount > $totalAmount) {
            return back()->withErrors(['paid_amount' => 'Paid amount cannot be more than total job order amount (₹' . $totalAmount . ').'])->withInput();
        }
        $ref = 'JOS-' . now()->format('Ym') . '-' . str_pad(JobOrderStatement::max('id') + 1, 3, '0', STR_PAD_LEFT);
        $balance = $totalAmount - $request->paid_amount;

        $jos = JobOrderStatement::create([
            'reference_number' => $ref,
            'total_job_orders' => $jobOrders->count(),
            'total_amount' => $totalAmount,
            'paid_amount' => $request->paid_amount,
            'balance_amount' => $balance,
            'remarks' => $request->remarks,
        ]);

        foreach ($jobOrders as $order) {
            JosJobOrderLink::create([
                'job_order_statement_id' => $jos->id,
                'job_order_id' => $order->id
            ]);
            $order->update(['jos_id' => $jos->id]);
        }

        return redirect()->route('list-jos')->with('success', 'JOS generated successfully');
    }

    public function viewJOS($id)
    {
        $jos = JobOrderStatement::with('jobOrders')->findOrFail($id);
        return view('layouts.app', [
            'view' => 'jos.view',
            'jos' => $jos
        ]);
    }

   public function exportPDF($id)
    {
        $jos = JobOrderStatement::with(['jobOrders.typeOfWork'])->findOrFail($id);

        $firstJob = $jos->jobOrders->first();

        $contractor = $firstJob?->contractor;
        $conductor = $firstJob?->conductor;

        $pdf = PDF::loadView('jos.pdf', compact('jos', 'contractor', 'conductor'));

        return $pdf->download($jos->reference_number . '.pdf');
    }
}
