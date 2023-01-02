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

    public function like($id)
    {
        $food = Food::select('like', 'like_count')->where('id', $id)->first();
        Food::where('id', $id)->update(['like_count' => $food['like_count'] + 1]);
        // dump($food);

        return redirect("/dashboard/food/$id");
    }

    public function save($id)
    {
        Food::where('id', $id)->update(['saved' => true]);
        return redirect("/dashboard/food/$id");
    }

    public function unsave($id)
    {
        Food::where('id', $id)->update(['saved' => false]);
        return redirect("/dashboard/food/$id");
    }
}
