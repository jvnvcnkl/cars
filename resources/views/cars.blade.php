<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Cars</h1>

    <ul>
        @foreach($cars as $car)
        <li>
            {{$car->title}} {{$car->producer}} has {{$car->number_of_doors}} doors.
        </li>
        @endforeach
    </ul>

    <a href="/about">about</a>
    <a href="/cars">cars</a>
    <a href="../">home</a>
</body>

</html>