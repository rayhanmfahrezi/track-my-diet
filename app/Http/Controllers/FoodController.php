<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\TodayFood;
use App\Models\User;
use App\Models\UserDiet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FoodController extends Controller
{
    public function all()
    {
        if (UserDiet::where("user_id", Auth::id())->exists()) {
            $calories_needed = UserDiet::where("user_id", Auth::id())->get("calories_needed");
            $today_foods = TodayFood::where("user_id", Auth::id())->where("date", date('Y-m-d'))->get();
            // $foods = Food::all();
            $total_calory = 0;
            foreach ($today_foods as $food) {
                $total_calory += $food["calory"];
            }
            $remaining = $calories_needed[0]['calories_needed'] - $total_calory;
            $foods = Food::where("calories", "<", $remaining)->get();

            // dump($calories);
            return view('dashboard', ["foods" => $foods, "calories_needed" => $calories_needed, "total" => $total_calory]);
        } else {
            return redirect(route("user_diets"));
        }
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

    public function saved()
    {
        $foods = Food::where('saved', true)->get();
        return view("saved", ["foods" => $foods]);
    }

    public function searchTodayFood($name)
    {
        # code...
    }

}
