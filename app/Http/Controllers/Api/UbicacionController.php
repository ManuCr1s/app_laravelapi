<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\Districts;

class UbicacionController extends Controller
{
    public function getProvince(){
        $province = Province::select('id_province', 'nombre')->get();
        return response()->json($province);
    } 
    public function getDistritcs(){
        $districts = Districts::select('id_districts','nombre')->get();
        return response()->json($districts);
    } 
}
