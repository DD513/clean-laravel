<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\DrinkService;

class DrinksController extends Controller
{
    protected $drink;

    //再函式庫裡新增一個 $this->drink ，會去呼叫到DrinkService
    public function __construct()
    {
        $this->drink = new DrinkService();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'dd' => 'dd HI',
            'drinks' => $this->drink->getAllDrink(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $createDrink = $this->drink->createDrink($request);
        return response()->json([
            'dd' => 'dd HI Store',
            'status' => '新增成功',
            'req' => $createDrink,
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $getAssignDrink = $this->drink->getAssignDrink($id);

        if (!$getAssignDrink) {
            return response()->json(['status' => "查詢失敗"], 400);
        }
        return response()->json([
            'dd' => 'dd HI Show',
            'status' => '查詢成功',
            'req' => $getAssignDrink,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $createDrink = $this->drink->updateDrink($request, $id);
        if (!$createDrink) {
            return response()->json(['status' => "新增失敗"], 400);
        }
        return response()->json([
            'dd' => 'dd HI Store',
            'status' => '修改成功',
            'req' => $createDrink,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deletedrink = $this->drink->deleteDrink($id);
        if (!$deletedrink) {
            return response()->json(['status' => "刪除失敗"], 400);
        }
        return response()->json([
            'dd' => 'dd HI Store',
            'status' => '刪除成功',
            'req' => $deletedrink,
        ], 200);
    }
}
