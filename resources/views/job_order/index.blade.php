
<div class="d-flex justify-content-between align-items-center mb-3">
    <h4>Job Orders List</h4>
    <a href="{{ route('add-page-job-order') }}" class="btn btn-primary">Add Job Order</a>
</div>


@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif


<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Reference</th>
            <th>Name</th>
            <th>Date</th>
            <th>JOS Date</th>
            <th>Type</th>
            <th>Contractor</th>
            <th>Conductor</th>
            <th>Work Done</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($job_orders as  $jo)
            <tr>
                <td>{{ $jo->reference_number }}</td>
                <td>{{ $jo->name }}</td>
                <td>{{ $jo->date }}</td>
                <td>{{ $jo->jos_date }}</td>
                <td>{{ $jo->typeOfWork->name ?? '' }}</td>
                <td>{{ $jo->contractor->name ?? '' }}</td>
                <td>{{ $jo->conductor->first_name ?? '' }}</td>
                <td>{{ $jo->actual_work_completed }}</td>
                <td>
                    <a href="{{ route('edit-page-job-order', $jo->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <a href="{{ route('view-job-order', $jo->id) }}" class="btn btn-sm btn-info">View</a>
                    <a href="{{ route('delete-job-order', $jo->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Delete?')">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
