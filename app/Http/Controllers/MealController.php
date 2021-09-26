<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Meal;

class MealController extends Controller
{
    public function add_meal ()
    {
        Meal::create([
            'meal_id' => 1,
            'student_name' => 'shauna-lee',
            'meal_name' => 'rice, peas n\' chicken',
            'meal_type' => 'starch'
        ]);

        echo "Meals added successfully";
    }

    // public function choose_meal ()
    // {
    //     $meals = Meal::all();
    //     return view('index', ['meals' => $meals]);
    // }

    // public function date_range ()
    // {
    //     $date_range = Meal::where('created_at', '<=', now()->subDays(14))->get();

    //     return $date_range;
    // }
}
