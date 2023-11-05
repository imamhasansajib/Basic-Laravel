<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Edit Person</title>
</head>

<body>
    <div class="container">
        <h2>Edit Person</h2>
        <form action="{{ url('update-person/'.$person->id) }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" value="{{ $person->name }}" class="form-control" id="">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" value="{{ $person->email }}" class="form-control" id="">
            </div>
            <div class="form-group">
                <label for="">Birth Date</label>
                <input type="date" name="birth_date" value="{{ $person->birth_date }}" class="form-control" id="">
            </div>
            <div class="form-group">
                <label for="">Salary</label>
                <input type="number" name="salary" value="{{ $person->salary }}" class="form-control" id="">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-dark">Update</button>
                <a class="btn btn-success" href="{{ url('persons') }}">Back to person</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
