<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarsController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('pages.index', compact('cars'));
    }

    public function show($id)
    {
        $car = Car::findOrFail($id);
        $otherCars = Car::where('id', 'not like', $id)->get();

        return view('pages.show', compact('car', 'otherCars'));
    }
}
