<?php

namespace App\Http\Controllers;

use App\Models\UserDiet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDietsController extends Controller
{
    public function showForm()
    {
        return view('user_diets_form');
    }

    public function save(Request $request)
    {
        $user_diet = new UserDiet();
        $user_diet->age = $request->age;
        $user_diet->gender = $request->gender;
        $user_diet->weight = $request->weight;
        $user_diet->height = $request->height;
        $user_diet->activity = $request->activity;
        $user_diet->goal = $request->goal;

        $bmr = 0;
        if ($request->gender == "man") {
            $bmr = 88362 + (13397 * $request->weight) + (4799 * $request->height) - (5677 * $request->age);
        } elseif ($request->gender == "woman") {
            $bmr = 447593 + (9247 * $request->weight) + (4330 * $request->height) - (5677 * $request->age);
        }
        $user_diet->bmr = $bmr;

        $calory = 0;



        $user_diet->user_id = Auth::id();
        $user_diet->save();

        return redirect(route('dashboard'));
    }
}
