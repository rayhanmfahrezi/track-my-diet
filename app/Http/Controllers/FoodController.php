<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function all()
    {
        $foods = Food::all();
        // dump($result);
        return view('dashboard', ["foods" => $foods]);
    }
}
