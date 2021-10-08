@extends('layouts.app')
@section('title','Car Project')

@section('content')
<div class="content">
    <div class="title m-b-md">
        Welcome to Cars Project
    </div>

    <p>Welcome, {{$name}} <br>
        You are {{$age}} old.
    </p>


    @endsection