<?php

namespace App\Http\Controllers;

use App\Models\Calle;
use Illuminate\Http\Request;

class CalleController extends Controller
{
    public function listar(Request $request){

        $response = Calle::where('id_ciudad', $request->id)->get();

       return response()->json($response);

    }
}
