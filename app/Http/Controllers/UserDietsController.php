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
            $bmr = 88.362 + (13.397 * $request->weight) + (4.799 * $request->height) - (5.677 * $request->age);
        } elseif ($request->gender == "woman") {
            $bmr = 447.593 + (9.247 * $request->weight) + (3.098 * $request->height) - (4.330 * $request->age);
        }
        $user_diet->bmr = $bmr;

        $calory = 0;
        if ($request->activity == "sedentary") {
            $calory = $bmr * 1.2;
        } elseif ($request->activity == "normal") {
            $calory = $bmr * 1.375;
        } elseif ($request->activity == "intense") {
            $calory = $bmr * 1.55;
        }
        if ($request->goal == "loss") {
            $calory -= 500;
        } elseif ($request->goal == "gain") {
            $calory += 500;
        }
        $user_diet->calories_needed = $calory;
        $user_diet->user_id = Auth::id();
        $user_diet->save();
        return redirect(route('dashboard'));
    }


    public function show()
    {
        $user_diet = UserDiet::where("user_id", Auth::id())->first();
        return view('user_diet', ["user_diet" => $user_diet]);
    }

    public function viewEdit()
    {
        $user_diet = UserDiet::where("user_id", Auth::id())->first();
        return view('edit_user_diets_form', ["user_diet" => $user_diet]);
    }

    public function update(Request $request)
    {
        $user_diet = UserDiet::where("user_id", Auth::id())->first();
        $user_diet->age = $request->age;
        $user_diet->gender = $request->gender;
        $user_diet->weight = $request->weight;
        $user_diet->height = $request->height;
        $user_diet->activity = $request->activity;
        $user_diet->goal = $request->goal;

        $bmr = 0;
        if ($request->gender == "man") {
            $bmr = 88.362 + (13.397 * $request->weight) + (4.799 * $request->height) - (5.677 * $request->age);
        } elseif ($request->gender == "woman") {
            $bmr = 447.593 + (9.247 * $request->weight) + (3.098 * $request->height) - (4.330 * $request->age);
        }
        $user_diet->bmr = $bmr;

        $calory = 0;
        if ($request->activity == "sedentary") {
            $calory = $bmr * 1.2;
        } elseif ($request->activity == "normal") {
            $calory = $bmr * 1.375;
        } elseif ($request->activity == "intense") {
            $calory = $bmr * 1.55;
        }
        if ($request->goal == "loss") {
            $calory -= 500;
        } elseif ($request->goal == "gain") {
            $calory += 500;
        }
        $user_diet->calories_needed = $calory;
        $user_diet->user_id = Auth::id();
        $user_diet->save();
        return redirect('/show-user-diets');
    }
}
