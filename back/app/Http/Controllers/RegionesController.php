<?php

namespace App\Http\Controllers;

use App\Models\Region;
use Illuminate\Http\Request;

class RegionesController extends Controller
{
    public function listar(Request $request){

        $response = Region::all();

       return response()->json($response);

    }
}
