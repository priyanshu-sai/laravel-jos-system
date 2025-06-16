<div class="mb-4">
    <h4 class="fw-bold">View Contractor</h4>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <div class="row g-3">
            <div class="col-sm-4"><strong>Name:</strong> {{ $contractor->name }}</div>
            <div class="col-sm-4"><strong>Code:</strong> {{ $contractor->code }}</div>
            <div class="col-sm-4"><strong>Email:</strong> {{ $contractor->email }}</div>
            <div class="col-sm-4"><strong>Phone Number:</strong> {{ $contractor->phone_number }}</div>
            <div class="col-sm-4"><strong>Company:</strong> {{ $contractor->company_name }}</div>
            <div class="col-sm-4"><strong>Balance:</strong> {{ $contractor->balance }}</div>
        </div>

        <div class="mt-3">
            <a href="{{ route('list-contractors') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
</div>
