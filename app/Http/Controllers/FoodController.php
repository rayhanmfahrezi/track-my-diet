<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function all()
    {
        $foods = Food::all();
        return view('dashboard', ["foods" => $foods]);
    }

    public function single($id)
    {
        $food = Food::where('id', $id)->first();
        $ingredients = explode(",", $food["ingredient"]);
        return view('food_info', ["food" => $food, "ingredients" => $ingredients]);
    }

    public function search(Request $request)
    {
        $name = $request->search;
        $foods = Food::where('name', 'LIKE', "%" . $name . "%")->get();

        return view('search', ['foods' => $foods, 'name' => $name]);
    }
}
