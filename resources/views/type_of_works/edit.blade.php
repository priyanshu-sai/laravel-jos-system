
<div class="mb-4">
    <h4 class="fw-bold">Edit Type Of Work</h4>
</div>



<div class="card shadow-sm">
    <div class="card-body">
        <form action="{{ route('update-type-of-works', $type_of_work->id) }}" method="POST">
    @csrf
            <div class="row">
                <div class="col-sm-4">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control"
                        value="{{ old('name', $type_of_work->name) }}">
                         @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>

                <div class="col-sm-4">
                    <label for="rate" class="form-label">Rate</label>
                    <input type="number" name="rate" id="rate" step="0.01" class="form-control"
                        value="{{ old('rate', $type_of_work->rate) }}">
                        @error('rate')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>

                <div class="col-sm-4">
                    <label for="code" class="form-label">Code</label>
                    <input type="text" name="code" id="code" class="form-control"
                        value="{{ old('code', $type_of_work->code) }}">
                        @error('code')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>
            </div>

            <div class="d-flex gap-2 my-2">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{ route('list-type-of-works') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>

