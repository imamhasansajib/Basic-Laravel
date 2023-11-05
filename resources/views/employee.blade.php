<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Employee</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <div class="container">
        <h3>Create Employee</h3>
        <form method="post">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Division</label>
                <select class="form-control" name="division" id="division">
                    <option value="">Select Division</option>
                    @foreach($divisions as $d)
                    <option value="{{ $d->id }}">{{ $d->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">District</label>
                <select class="form-control" name="district" id="district">
                    <option value="">Select District</option>
                </select>
            </div>
            <div class="form-group">
                <button id="submitBtn" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>

    <script>
    $(document).ready(function() {
        $("#division").change(function() {
            var division = $(this).val();
            $("#district").empty();
            $.ajax({
                url: "http://127.0.0.1:8000/api/districts/" + division,
                type: 'GET',
                dataType: 'json',
                success: function(res) {
                    var districts = res.districts;
                    var len = districts.length;
                    console.log(districts, len);
                    var str = '';
                    for (var i = 0; i < len; i++) {
                        str += '<option value="' + districts[i].id + '">' + districts[i]
                            .name + '</option>';
                    }
                    console.log(str);
                    $("#district").append(str);
                }
            });
        });

        $("#submitBtn").click(function() {
            $.ajax({
                url: "http://127.0.0.1:8000/api/store-employee",
                type: "POST",
                dataType: 'json',
                data: {
                    name: $("#name").val(),
                    division: $("#division").val(),
                    district: $("#district").val()
                },
                success: function(response) {
                    //console.log(response);
                    window.location.href = "http://127.0.0.1:8000/create-employee";
                    alert('Employee Created successfully');
                }
            });

        });
    });
    </script>
</body>


</html>