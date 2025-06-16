<div class="mb-4">
    <h3>Job Order Statement Details</h3>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <div class="row g-3">

       <div class="col-sm-4"><strong>Reference:</strong> {{ $jos->reference_number }}</div>
       <div class="col-sm-4"><strong>Total JOs:</strong> {{ $jos->total_job_orders }}</div>
       <div class="col-sm-4"><strong>Total Amount:</strong> ₹{{ $jos->total_amount }}</div>
       <div class="col-sm-4"><strong>Paid:</strong> ₹{{ $jos->paid_amount }}</div>
       <div class="col-sm-4"><strong>Balance:</strong> ₹{{ $jos->balance_amount }}</div>

        </div>
    </div>
</div>


<div class="my-4">
    <h3>Linked Job Orders:</h3>
</div>

<table class="table table-hover table-bordered">
    <thead>
        <tr>
            <th>Reference</th>
            <th>Work Done</th>
            <th>Rate</th>
            <th>Amount</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($jos->jobOrders as $order)
            <tr>
                <td>{{ $order->reference_number }}</td>
                <td>{{ $order->actual_work_completed }}</td>
                <td>{{ $order->typeOfWork->rate ?? '-' }}</td>
                <td>
                    ₹{{ $order->actual_work_completed * ($order->typeOfWork->rate ?? 0) }}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="d-flex justify-content-start gap-2 mt-3">
    <a href="{{ route('list-jos') }}" class="btn btn-secondary">Back</a>
    <a href="{{ route('export-jos-pdf', $jos->id) }}" class="btn btn-danger">Download PDF</a>
</div>
