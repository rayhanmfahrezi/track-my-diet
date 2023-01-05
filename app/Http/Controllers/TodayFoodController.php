<?php

namespace App\Http\Controllers;

use App\Models\TodayFood;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;

class TodayFoodController extends Controller
{
    //
    public function all($year, $month, $day)
    {
        $today_foods = TodayFood::all()->where("date", "$year-$month-$day")->where('user_id', Auth::id());
        dump($today_foods);

        return view('today_foods', ["today_foods" => $today_foods]);
    }

    public function date(Request $request)
    {
        $date = $request->input('date');

        if (!$date) {
            $date = date('Y-m-d');
        }

        // $date = $request->input('date');
        // dump($date);
        // $year = substr($date, 0, 4);
        // $month = substr($date, 5, 6);
        // $day = substr($date, 9, 11);
        // dump($month);


        $today_foods = TodayFood::all()->where("date", $date)->where('user_id', Auth::id());
        // dump($today_foods);

        return view('today_foods', ["today_foods" => $today_foods, "date" => $date]);
        // return redirect("/today-food/$year/$month/$day");
    }

    public function add(Request $request)
    {
        // dump($request);
        $today_food = new TodayFood();
        $today_food->date = $request->date;
        $today_food->name = $request->name;
        $today_food->calory = $request->calory;
        $today_food->user_id = Auth::id();
        $today_food->save();

        return redirect(route('today_foods'));
    }

    public function viewEdit($id)
    {
        $today_food = TodayFood::where('id', $id)->first();

        return view('today_food_form', ["today_food" => $today_food]);
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
