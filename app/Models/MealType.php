<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MealType extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_name',
        'type_desc'
    ];

    public function meal ()
    {
        return $this->hasMany(Meal::class);
    }
}
