<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class DetailController extends Controller
{
  public function show($id) {

    $cars = Car::all();

    return view("detail", ['cars' => $cars, 'id' => $id]);
  }
}
