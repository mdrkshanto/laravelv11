<div class="container mt-5">
    <form action="{{ route('postTest') }}" method="post" enctype="multipart/form-data">
        <div class="mb-3 has-validation col-7">
        @csrf
            <label class="form-label">Upload Image</label>
            <input type="file" name="image[]"
                class="form-control form-control-sm form-control-file shadow-none @error('image')is-invalid @enderror @error('image.*')is-invalid @enderror" multiple/>
            @error('image')
                <span class="invalid-feedback fw-bolder">{{ $message }}</span>
            @enderror
            @error('image.*')
                <span class="invalid-feedback fw-bolder">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-sm shadow-none btn-success col-7">Upload</button>
    </form>
</div>
