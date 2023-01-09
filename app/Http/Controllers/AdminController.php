<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\TodayFood;
use App\Models\User;
use App\Models\UserDiet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller

{
    
    public function foodAdmin()
    {
        $foods = Food::all();
        return view('admin.auth.welcome_admin', ["foods" => $foods]);
    }

    public function createFood_admin(Request $request)
    {
        $this->validate($request,[
            'photo' => 'required|mimes:jpeg',
            'name' => 'required|string|alpha_dash',
            'category' => 'required|string|alpha_dash',
            'description' => 'required|string|alpha_dash',
            'calories' => 'required|integer',
            'carbs' => 'required|numeric|max:6',
            'fat' => 'required|numeric|max:6',
            'protein' => 'required|numeric|max:6',
            'ingredient' => 'required|string',
            'instruction' => 'required|string',
        ]);

        $food = new Food();

        if($request->file('photo')){
            $file= $request->file('photo');
            $filename = $file->getClientOriginalName();
            $file->move(public_path("images/$request->category"), $filename);
        }

        $food->name = $request->name;
        $food->category = $request->category;
        $food->description = $request->description;
        $food->calories = $request->calories;
        $food->carbs = $request->carbs;
        $food->fat = $request->fat;
        $food->protein = $request->protein;
        $food->ingredient = $request->ingredient;
        $food->instruction = $request->instruction;

        $food->serving_size = 1;
        $food->like = false;
        $food->like_count = 0;
        $food->saved = false;

        $food->save();
        return redirect('/admin-dashboard/food');
    }

    public function viewEdit($id)
    {
        $food = Food::where('id', $id)->first();
        return view('admin.edit_foodAdmin', ["food" => $food]);
    }

    public function update(Request $request)
    {
        $food = Food::where('id', $request->id)->first();
        if($request->file('photo')){
            $file= $request->file('photo');
            $filename = $file->getClientOriginalName();
            $file->move(public_path("images/$request->category"), $filename);
        }

        $food->name = $request->name;
        $food->category = $request->category;
        $food->description = $request->description;
        $food->calories = $request->calories;
        $food->carbs = $request->carbs;
        $food->fat = $request->fat;
        $food->protein = $request->protein;
        $food->ingredient = $request->ingredient;
        $food->instruction = $request->instruction;
        $food->save();

        return redirect('/admin-dashboard/food');
    }

    public function delete($id)
    {

        $food = Food::find($id);
        $food->delete();

        return redirect('/admin-dashboard/food');
    }
}
