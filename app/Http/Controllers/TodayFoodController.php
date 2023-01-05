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

        return view('today_foods', ["today_foods" => $today_foods]);
        // return redirect("/today-food/$year/$month/$day");
    }
}
