<div class="mb-4">
    <h4 class="fw-bold">Edit Conductor</h4>
</div>


<div class="card shadow-sm">
    <div class="card-body">
        <form action="{{ route('update-conductors', $conductor->id) }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-sm-4">
                    <label>First Name</label>
                    <input type="text" name="first_name" class="form-control" value="{{ old('first_name', $conductor->first_name) }}">
                     @error('first_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-sm-4">
                    <label>Middle Name</label>
                    <input type="text" name="middle_name" class="form-control" value="{{ old('middle_name', $conductor->middle_name) }}">
                     @error('middle_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-sm-4">
                    <label>Last Name</label>
                    <input type="text" name="last_name" class="form-control" value="{{ old('last_name', $conductor->last_name) }}">
                    @error('last_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-sm-4 mt-3">
                    <label>Staff ID</label>
                    <input type="text" name="staff_id" class="form-control" value="{{ old('staff_id', $conductor->staff_id) }}">
                    @error('staff_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-sm-4 mt-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email', $conductor->email) }}">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-sm-4 mt-3">
                    <label>Phone Number</label>
                    <input type="text" name="phone_number" class="form-control" value="{{ old('phone_number', $conductor->phone_number) }}">
                    @error('phone_number')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-sm-4 mt-3">
                    <label>Department Name</label>
                    <input type="text" name="department_name" class="form-control" value="{{ old('department_name', $conductor->department_name) }}">
                    @error('department_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="d-flex gap-2 mt-4">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{ route('list-conductors') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>
