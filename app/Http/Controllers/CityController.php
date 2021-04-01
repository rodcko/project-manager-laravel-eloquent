<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

class CityController extends Controller
{
        public function insertCity() {
        $city = new City;
        $city->name = 'Guatemala';
        $city->save();

        return "Ciudad Guardada";
    }
}
