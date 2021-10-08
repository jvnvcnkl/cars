<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cars Project</title>


</head>

<body>


    <div class="content">
        <div class="title m-b-md">
            Welcome to Cars Project
        </div>

        <p>Welcome, {{$name}} <br>
            You are {{$age}} old.
        </p>

        <a href="/about">about</a>
</body>

</html>