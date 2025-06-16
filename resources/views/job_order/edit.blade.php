<div class="mb-4">
    <h2 class="fw-bold">Edit Job Order</h2>
</div>
<div class="card shadow-sm">
    <div class="card-body">
<form method="POST" action="{{ route('update-job-order', $job_order->id) }}">
    @csrf
    <div class="row">
        <div class="col-md-6 mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $job_order->name) }}">
            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label>Date</label>
            <input type="date" name="date" class="form-control" value="{{ old('date', $job_order->date) }}">
            @error('date') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label>JOS Date</label>
            <input type="date" name="jos_date" class="form-control" value="{{ old('jos_date', $job_order->jos_date) }}">
            @error('jos_date') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label>Type of Work</label>
            <select name="type_of_work_id" class="form-control">
                <option value=""> Select Type </option>
                @foreach($types as $type)
                    <option value="{{ $type->id }}" {{ $type->id == old('type_of_work_id', $job_order->type_of_work_id) ? 'selected' : '' }}>
                        {{ $type->name }}
                    </option>
                @endforeach
            </select>
            @error('type_of_work_id') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label>Contractor</label>
            <select name="contractor_id" class="form-control">
                <option value=""> Select Contractor </option>
                @foreach($contractors as $contractor)
                    <option value="{{ $contractor->id }}" {{ $contractor->id == old('contractor_id', $job_order->contractor_id) ? 'selected' : '' }}>
                        {{ $contractor->name }}
                    </option>
                @endforeach
            </select>
            @error('contractor_id') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label>Conductor</label>
            <select name="conductor_id" class="form-control">
                <option value=""> Select Conductor </option>
                @foreach($conductors as $conductor)
                    <option value="{{ $conductor->id }}" {{ $conductor->id == old('conductor_id', $job_order->conductor_id) ? 'selected' : '' }}>
                        {{ $conductor->first_name }}
                    </option>
                @endforeach
            </select>
            @error('conductor_id') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label>Actual Work Completed</label>
            <input type="number" step="0.01" name="actual_work_completed" class="form-control" value="{{ old('actual_work_completed', $job_order->actual_work_completed) }}">
            @error('actual_work_completed') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="col-md-12 mb-3">
            <label>Remarks</label>
            <textarea name="remarks" class="form-control">{{ old('remarks', $job_order->remarks) }}</textarea>
        </div>

        <div class="col-md-12">
            <button class="btn btn-primary">Save</button>
            <a href="{{ route('list-job-orders') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
</form>
    </div>
</div>
