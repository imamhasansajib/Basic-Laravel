<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-3">
        @if(Session::has('success'))
        <div class="controls input-xlarge">
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                {{ Session::get('success') }}
            </div>
        </div>
        @endif
        <form action="{{ url('upload-image') }}" enctype="multipart/form-data" method="post">
            {{ csrf_field() }}

            <h2>Upload Single Image</h2>
            <div class="custom-file mt-2 mb-3">
                <input type="file" class="custom-file-input" id="filename" name="filename">
                <label class="custom-file-label" for="customFile">Choose Image</label>
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Upload Image</button>
                <img class="img" width="200px" hidden="true" id="blah" src="#" />
            </div>
        </form>
    </div>

    @if($images)
    <div class="container">
        <div class="row">
            @foreach($images as $img)
            <div class="col-md-2">
                <img class="mb-3" src="{{ asset('/thumbnail/'.$img->filename) }}" />
            </div>
            @endforeach
        </div>
    </div>
    @endif

    <script>
    filename.onchange = evt => {
        const [file] = filename.files
        if (file) {
            blah.src = URL.createObjectURL(file)
        }
        $('.img').attr('hidden', false);

    }
    </script>
    <script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 3000);
    </script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>