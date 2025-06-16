
<div class="mb-4">
    <h4 class="fw-bold">Type Of Work Details</h4>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <div class="row g-3">
            <div class="col-sm-4"><strong>Name:</strong> {{ $type_of_work->name }}</div>
            <div class="col-sm-4"><strong>Rate:</strong> {{ $type_of_work->rate }}</div>
            <div class="col-sm-4"><strong>Code:</strong> {{ $type_of_work->code }}</div>
        </div>

        <div class="mt-3">
            <a href="{{ route('list-type-of-works') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
</div>
