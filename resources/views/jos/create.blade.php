<div class="mb-4">
    <h4 class="fw-bold">Generate Job Order Statement</h4>
</div>

@if(session('error'))
    <div class="alert alert-warning">
        {{ session('error') }}
    </div>
@endif

<form method="GET" action="{{ route('create-jos-page') }}">
    <div class="row">
        <div class="col-sm-4">
            <label>Select Month</label>
            <input type="month" name="month" class="form-control" value="{{ request('month') }}" required>
        </div>

        <div class="col-sm-4">
            <label>Select Contractor</label>
            <select name="contractor_id" class="form-control" required>
                <option value="">Select</option>
                @foreach($contractors as $contractor)
                    <option value="{{ $contractor->id }}" {{ request('contractor_id') == $contractor->id ? 'selected' : '' }}>
                        {{ $contractor->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="col-sm-4">
            <label>Select Conductor</label>
            <select name="conductor_id" class="form-control" required>
                <option value="">Select</option>
                @foreach($conductors as $conductor)
                    <option value="{{ $conductor->id }}" {{ request('conductor_id') == $conductor->id ? 'selected' : '' }}>
                        {{ $conductor->first_name }} {{ $conductor->middle_name }} {{ $conductor->last_name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="col-sm-12 mt-3">
            <button type="submit" class="btn btn-primary">Search Job Orders</button>
        </div>
    </div>
</form>

@if($grouped)
    <hr>
    <h5>Matching Job Orders ({{ $grouped['count'] }}) | Total Amount: ₹{{ number_format($grouped['total'], 2) }}</h5>

    <form method="POST" action="{{ route('insert-jos') }}">
        @csrf
        <input type="hidden" name="month" value="{{ $grouped['month'] }}">
        <input type="hidden" name="contractor_id" value="{{ $grouped['contractor_id'] }}">
        <input type="hidden" name="conductor_id" value="{{ $grouped['conductor_id'] }}">

        <div class="table-responsive mt-3">
            <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Job Order</th>
                        <th>Date</th>
                        <th>Type of Work</th>
                        <th>Work Completed</th>
                        <th>Rate</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($grouped['job_orders'] as $index => $jo)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $jo->name }}</td>
                            <td>{{ $jo->jos_date }}</td>
                            <td>{{ $jo->typeOfWork->name }}</td>
                            <td>{{ $jo->actual_work_completed }}</td>
                            <td>{{ $jo->typeOfWork->rate }}</td>
                            <td>{{ $jo->actual_work_completed * $jo->typeOfWork->rate }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="row mt-3">
            <div class="col-sm-4">
                <label>Paid Amount</label>
                <input type="number" name="paid_amount" step="0.01" class="form-control" required>
            </div>
            <div class="col-sm-6">
                <label>Remarks (optional)</label>
                <textarea name="remarks" class="form-control" rows="2"></textarea>
            </div>
        </div>

        <div class="mt-3">
            <button type="submit" class="btn btn-success">Generate JOS</button>
        </div>
    </form>
@endif
