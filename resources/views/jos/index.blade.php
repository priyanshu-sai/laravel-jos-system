<div class="d-flex justify-content-between align-items-center mb-3">
    <h4>Job Order Statement</h4>
    <a href="{{ route('create-jos-page') }}" class="btn btn-primary">Add JOS</a>
</div>

<div class="row mb-3">
    <div class="col-md-4">
        <label for="month">Filter by Month</label>
        <form method="GET" action="{{ route('list-jos') }}">
            <input type="month" name="month" class="form-control" value="{{ request('month') }}">
            <button class="btn btn-primary mt-2">Filter</button>
        </form>
    </div>
</div>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Reference</th>
            <th>Total JOs</th>
            <th>Total Amount</th>
            <th>Paid</th>
            <th>Balance</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @if(count($jos_list) > 0)
        @foreach ($jos_list as $jos)
            <tr>
                <td>{{ $jos->reference_number }}</td>
                <td>{{ $jos->total_job_orders }}</td>
                <td>₹{{ $jos->total_amount }}</td>
                <td>₹{{ $jos->paid_amount }}</td>
                <td>₹{{ $jos->balance_amount }}</td>
                <td>
                    <a href="{{ route('view-jos', $jos->id) }}" class="btn btn-info btn-sm">View</a>
                </td>
            </tr>
        @endforeach
        @else
            <td class="text-center" colspan="6">No Record Found</td>
        @endif
    </tbody>
</table>
