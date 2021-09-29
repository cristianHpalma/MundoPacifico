<?php

namespace App\Http\Controllers;

use App\Models\Ciudad;
use Illuminate\Http\Request;

class CiudadController extends Controller
{
    public function listar(Request $request){

        $response = Ciudad::where('id_provincia', $request->id)->get();

       return response()->json($response);

    }
}
