<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use App\Models\MealType;
use Illuminate\Http\Request;

class MealTypeController extends Controller
{
    public function add_type ()
    {
        MealType::create([
            'type_name' => 'starch',
            'type_desc' => 'Starch is a polymeric carbohydrate consisting of numerous glucose'
        ]);

        MealType::create([
            'type_name' => 'vegetable',
            'type_desc' => 'Vegetables are parts of plants that are consumed by humans'
        ]);

        echo "Meal types added successfully";
    }

    public function get_type ()
    {
        $mealTypes = MealType::all();
        foreach ($mealTypes as $mealType)
        {
            $meals = Meal::where('meal_type_id', '=', $mealType->id);
            echo "<h3>Meal Type : " . $mealType->type_name . "</h3";

            foreach ($meals as $meal) {
                echo "<p style='padding-left:10px'>Meal Name : $meal->type_name</p>";
                echo "<p style='padding-left:10px'>Mead Description : $meal->type_desc</p>";
                echo "<br>";
            }
        }
    }
}
