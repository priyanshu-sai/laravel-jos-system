
<div class="mb-4">
    <h4 class="fw-bold">Add New Type Of Work</h4>
</div>


<div class="card shadow-sm">
    <div class="card-body">
        <form action="{{ route('insert-type-of-works') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-sm-4">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-sm-4">
                    <label for="rate" class="form-label">Rate</label>
                    <input type="number" name="rate" id="rate" step="0.01" class="form-control" value="{{ old('rate') }}">
                    @error('rate')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-sm-4">
                    <label for="code" class="form-label">Code</label>
                    <input type="text" name="code" id="code" class="form-control" value="{{ old('code') }}">
                    @error('code')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="d-flex gap-2 my-2">
                <button type="submit" class="btn btn-success">Save</button>
                <a href="{{ route('list-type-of-works') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>
