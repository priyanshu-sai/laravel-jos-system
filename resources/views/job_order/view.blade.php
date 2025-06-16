<div class="mb-4">
    <h3>Job Order Details</h3>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <div class="row g-3">
            <div class="col-sm-4"><strong>Reference:</strong> {{ $job_order->reference_number }}</div>
            <div class="col-sm-4"><strong>Name:</strong> {{ $job_order->name }}</div>
            <div class="col-sm-4"><strong>Date:</strong> {{ $job_order->date }}</div>
            <div class="col-sm-4"><strong>JOS Date:</strong> {{ $job_order->jos_date }}</div>
            <div class="col-sm-4"><strong>Type of Work:</strong> {{ $job_order->typeOfWork->name ?? '' }}</div>
            <div class="col-sm-4"><strong>Contractor:</strong> {{ $job_order->contractor->name ?? '' }}</div>
            <div class="col-sm-4"><strong>Conductor:</strong> {{ $job_order->conductor->first_name ?? '' }}</div>
            <div class="col-sm-4"><strong>Work Done:</strong> {{ $job_order->actual_work_completed }}</div>
            <div class="col-sm-4"><strong>Remarks:</strong> {{ $job_order->remarks }}</div>
        </div>
        <a href="{{ route('list-job-orders') }}" class="btn btn-secondary mt-3">Back</a>
    </div>
</div>
