<div class="mb-4">
    <h2 class="fw-bold">Add Job Order</h2>
</div>
<div class="card shadow-sm">
    <div class="card-body">
        <form method="POST" action="{{ route('insert-job-order') }}">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label>Date</label>
                    <input type="date" name="date" class="form-control" value="{{ old('date') }}">
                    @error('date')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label>JOS Date</label>
                    <input type="date" name="jos_date" class="form-control" value="{{ old('jos_date') }}">
                    @error('jos_date')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label>Type of Work</label>
                    <select name="type_of_work_id" class="form-control">
                        <option value=""> Select Type </option>
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach
                    </select>
                    @error('type_of_work_id')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label>Contractor</label>
                    <select name="contractor_id" class="form-control">
                        <option value=""> Select Contractor </option>
                        @foreach ($contractors as $contractor)
                            <option value="{{ $contractor->id }}">{{ $contractor->name }}</option>
                        @endforeach
                    </select>
                    @error('contractor_id')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label>Conductor</label>
                    <select name="conductor_id" class="form-control">
                        <option value="">Select Conductor</option>
                        @foreach ($conductors as $conductor)
                            <option value="{{ $conductor->id }}">{{ $conductor->first_name }}</option>
                        @endforeach
                    </select>
                    @error('conductor_id')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label>Actual Work Completed</label>
                    <input type="number" step="0.01" name="actual_work_completed" class="form-control"
                        value="{{ old('actual_work_completed') }}">
                    @error('actual_work_completed')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-md-12 mb-3">
                    <label>Remarks</label>
                    <textarea name="remarks" class="form-control">{{ old('remarks') }}</textarea>
                </div>

                <div class="col-md-12">
                    <button class="btn btn-primary">Save</button>
                    <a href="{{ route('list-job-orders') }}" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </form>
    </div>
</div>
