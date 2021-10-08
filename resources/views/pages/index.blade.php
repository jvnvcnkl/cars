@extends('layouts.app')

@section('title', 'Cars')
@section('content')

<h1>Cars</h1>

<ul>
    @foreach($cars as $car)
    <li>
        <a href="{{ route ('car', ['id' => $car->id]) }}">{{$car->title}} {{$car->producer}}</a> has {{$car->number_of_doors}} doors.
    </li>
    @endforeach
</ul>

@endsection