<div class="mb-4">
    <h4 class="fw-bold">Conductor Details</h4>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <div class="row g-3">
            <div class="col-sm-4"><strong>First Name:</strong> {{ $conductor->first_name }}</div>
            <div class="col-sm-4"><strong>Middle Name:</strong> {{ $conductor->middle_name }}</div>
            <div class="col-sm-4"><strong>Last Name:</strong> {{ $conductor->last_name }}</div>
            <div class="col-sm-4"><strong>Staff ID:</strong> {{ $conductor->staff_id }}</div>
            <div class="col-sm-4"><strong>Email:</strong> {{ $conductor->email }}</div>
            <div class="col-sm-4"><strong>Phone:</strong> {{ $conductor->phone_number }}</div>
            <div class="col-sm-4"><strong>Department Name:</strong> {{ $conductor->department_name }}</div>
        </div>
        <a href="{{ route('list-conductors') }}" class="btn btn-secondary mt-3">Back</a>
    </div>
</div>
