<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test File Upload</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
</head>

<body>
    <div class="container mt-5">
        <form action="{{ route('postTest') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 has-validation col-7">
                <label class="form-label">Upload Image</label>
                <input type="file" name="image"
                    class="form-control form-control-file @error('image') is-invalid @enderror" />
                @error('image')
                    <span class="invalid-feedback fw-bolder">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-sm shadow-none btn-outline-success col-7">Upload</button>
        </form>
    </div>
</body>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

</html>
