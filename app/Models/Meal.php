<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_name',
        'meal_name',
        'meal_type'
    ];

    public function type ()
    {
        return $this->belongsTo(MealType::class);
    }
}
