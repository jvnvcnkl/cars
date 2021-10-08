@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @section('title',$car->title) </title>
</head>

<body>@section('content')

    {{ $car->title}} is produced by {{$car->producer}} and has {{$car->number_of_doors}} doors.

    @endsection
</body>

</html>