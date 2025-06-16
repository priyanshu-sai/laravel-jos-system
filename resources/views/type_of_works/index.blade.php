<div class="d-flex justify-content-between align-items-center mb-3">
    <h4>All Type Of Works</h4>
    <a href="{{ route('add-page-type-of-works') }}" class="btn btn-primary">Add Type</a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Rate</th>
            <th>Code</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @if(count($types) > 0)
            @foreach ($types as $type)
                <tr>
                    <td>{{ ucfirst($type->name) }}</td>
                    <td>₹{{ $type->rate }}</td>
                    <td>{{ strtoupper($type->code) }}</td>
                    <td>
                        <a href="{{ route('edit-page-type-of-works', $type->id) }}" class="btn btn-sm btn-success">Edit</a>
                        <a href="{{ route('view-type-of-works', $type->id) }}" class="btn btn-sm btn-warning text-white">View</a>
                        <a href="{{ route('delete-type-of-works', $type->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="4" class="text-center">No Type of Work found</td>
            </tr>
        @endif
    </tbody>
</table>
