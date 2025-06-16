<div class="mb-4">
    <h4 class="fw-bold">Add Contractor</h4>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <form action="{{ route('insert-contractors') }}" method="POST">
            @csrf
            <div class="row g-3">
                <div class="col-sm-4">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-sm-4">
                    <label>Code</label>
                    <input type="text" name="code" class="form-control" value="{{ old('code') }}">
                    @error('code')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-sm-4">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-sm-4">
                    <label>Phone Number</label>
                    <input type="text" name="phone_number" class="form-control" value="{{ old('phone_number') }}">
                    @error('phone_number')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-sm-4">
                    <label>Company Name</label>
                    <input type="text" name="company_name" class="form-control" value="{{ old('company_name') }}">
                    @error('company_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-sm-4">
                    <label>Balance</label>
                    <input type="number" step="0.01" name="balance" class="form-control" value="{{ old('balance') }}">
                    @error('balance')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{ route('list-contractors') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>
