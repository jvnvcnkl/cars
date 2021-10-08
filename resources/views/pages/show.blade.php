@extends('layouts.app')

@section('title',$car->title)

@section('content')

{{ $car->title}} is produced by {{$car->producer}} and has {{$car->number_of_doors}} doors.
<div class="dropdown">
    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
        Other cars
    </a>

    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">

        @foreach($otherCars as $otherCar)
        <li><a class="dropdown-item" href="{{ route ('car', ['id' => $otherCar->id]) }}">{{$otherCar->title}} {{$otherCar->producer}}</a></li>
        @endforeach
    </ul>
</div>
@endsection