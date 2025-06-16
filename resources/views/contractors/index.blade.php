<div class="d-flex justify-content-between align-items-center mb-3">
    <h4>Contractors List</h4>
    <a href="{{ route('add-page-contractors') }}" class="btn btn-primary">Add Contractors</a>
</div>

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Code</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Company</th>
                    <th>Balance</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contractors as $contractor)
                    <tr>
                        <td>{{ ucfirst($contractor->name )}}</td>
                        <td>{{ strtoupper($contractor->code) }}</td>
                        <td>{{ $contractor->email }}</td>
                        <td>{{ $contractor->phone_number }}</td>
                        <td>{{ $contractor->company_name }}</td>
                        <td>{{ $contractor->balance }}</td>
                        <td>
                            <a href="{{ route('edit-page-contractors', $contractor->id) }}" class="btn btn-sm btn-success">Edit</a>
                            <a href="{{ route('view-contractors', $contractor->id) }}" class="btn btn-sm btn-warning text-white">View</a>
                            <a href="{{ route('delete-contractors', $contractor->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
