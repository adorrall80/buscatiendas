<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comuna;

class ComunaController extends Controller
{
    public function getComunas(Request $request)
    {
        $comunas = Comuna::where('id_region', $request->region_id)->get();
        return response()->json($comunas);
    }
}
