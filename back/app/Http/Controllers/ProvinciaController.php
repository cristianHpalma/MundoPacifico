<?php

namespace App\Http\Controllers;

use App\Models\Provincia;
use Illuminate\Http\Request;

class ProvinciaController extends Controller
{
    public function listar(Request $request){

        $response = Provincia::where('id_region', $request->id)->get();

       return response()->json($response);

    }
}
