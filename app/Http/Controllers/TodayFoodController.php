<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\TodayFood;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;

class TodayFoodController extends Controller
{
    //
    // public function all($year, $month, $day)
    // {
    //     $today_foods = TodayFood::all()->where("date", "$year-$month-$day")->where('user_id', Auth::id());
    //     dump($today_foods);

    //     return view('today_foods', ["today_foods" => $today_foods]);
    // }

    public function date(Request $request)
    {
        $date = $request->input('date');

        if (!$date) {
            $date = date('Y-m-d');
        }

        $today_foods = TodayFood::all()->where("date", $date)->where('user_id', Auth::id());
        return view('today_foods', ["today_foods" => $today_foods, "date" => $date]);
    }

    public function add(Request $request)
    {

        if ($request->calory == null) {
            try {
                $food_array = Food::where("name", $request->name)->first();
                $food = collect($food_array);
                if ($food->isEmpty()) {
                    throw new Exception("Sorry, Food is not in database. You must fill calory by yourself");
                } else {
                    return view('today_food_form', ["today_food" => $food, "date" => $request->date, "error" => ""]);
                }
            } catch (Exception $e) {
                return view('today_food_form', ["date" => $request->date, "error" => $e->getMessage()]);
            }
        } else {
            $today_food = new TodayFood();
            $today_food->date = $request->date;
            $today_food->name = $request->name;
            $today_food->calory = $request->calory;
            $today_food->user_id = Auth::id();
            $today_food->save();

            return redirect(route('today_foods'));
        }
    }

    public function viewEdit($id)
    {
        $today_food = TodayFood::where('id', $id)->first();
        return view('edit_today_food_form', ["today_food" => $today_food]);
    }

    public function update(Request $request)
    {
        $today_food = TodayFood::where('id', $request->id)->first();
        $today_food->date = $request->date;
        $today_food->name = $request->name;
        $today_food->calory = $request->calory;
        $today_food->save();

        return redirect(route('today_foods'));
    }

    public function delete($id)
    {

        $today_food = TodayFood::find($id);
        $today_food->delete();

        return redirect(route('today_foods'));
    }
}
