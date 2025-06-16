<div class="mb-3 d-flex justify-content-between align-items-center">
    <h4 class="fw-bold">All Conductors</h4>
    <a href="{{ route('add-page-conductors') }}" class="btn btn-success">Add New</a>
</div>

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="card shadow-sm">
    <div class="card-body table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Staff ID</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Department</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($conductors as $conductor)
                    <tr>
                        <td>{{ ucfirst($conductor->first_name. ' ' .$conductor->middle_name .' '.$conductor->last_name) }}</td>
                        <td>{{ strtoupper($conductor->staff_id) }}</td>
                        <td>{{ $conductor->email }}</td>
                        <td>{{ $conductor->phone_number }}</td>
                        <td>{{ $conductor->department_name }}</td>
                        <td>
                            <a href="{{ route('edit-page-conductors', $conductor->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <a href="{{ route('delete-conductors', $conductor->id) }}"
                               onclick="return confirm('Are you sure to delete?')"
                               class="btn btn-sm btn-danger">Delete</a>
                            <a href="{{ route('view-conductors', $conductor->id) }}" class="btn btn-sm btn-info">View</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
