<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
</head>

<body>
    <div>
        <h1>About us</h1>
        <h3>
            <p>This is about us age</p>
        </h3>

        <p>Name: {{ $myname }}</p>
        <p>Phone: {{ $myphone }}</p>
    </div>

    <div>
        <ul>
            <li><a href="{{ url('/home') }}">Home</a></li>
            <li><a href="{{ url('/about') }}">About</a></li>
            <li><a href="{{ url('/contact') }}">Contact</a></li>
        </ul>
    </div>
</body>

</html>
