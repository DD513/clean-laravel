<?php

namespace App\Http\Services;

use App\Models\Drink;

class DrinkService
{
  public function getAllDrink()
  {
    $drinks = Drink::orderBy('created_at')->get();
    return $drinks;
  }
}
