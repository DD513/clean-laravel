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

  public function createDrink($request)
  {
    $request->all();

    $result = Drink::create(
      [
        'Title' => $request->Title,
        'SmallTitle' => $request->SmallTitle,
        'Type' => $request->Type,
        'Price' => $request->Price,
        'Description' => $request->Description,
        'Images' => $request->Images,
        'Size' => $request->Size
      ]
    );

    return $result;
  }

  public function updateDrink($request, $id)
  {
    $result = Drink::where('id', $id)->update(
      [
        'Title' => $request->Title,
        'SmallTitle' => $request->SmallTitle,
        'Type' => $request->Type,
        'Price' => $request->Price,
        'Description' => $request->Description,
        'Images' => $request->Images,
        'Size' => $request->Size
      ]
    );
    return $result;
  }

  public function deleteDrink($id)
  {
    $result = Drink::where('id', $id)->delete();
    return $result;
  }

  public function getAssignDrink($id)
  {
    $result = Drink::where('id', $id)->first();
    return $result;
  }
}
