<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Create Category</h2>
        @if(Session::has('success'))
        <div class="controls input-xlarge">
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                {{ Session::get('success') }}
            </div>
        </div>
        @endif
        <form action="{{ url('store-category') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" id="">
            </div>
            <div class="form-group">
                <label for="">Sort Order</label>
                <input type="number" name="sort_order" class="form-control" id="">
            </div>
            <div class="form-group form-check">
                <label class="form-check-label">
                    <input class="form-check-input" value="1" name="status" type="checkbox"> Active
                </label>
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
        </d iv>

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
