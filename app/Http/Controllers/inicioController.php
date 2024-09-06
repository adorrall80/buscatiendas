<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\categoria;
use App\Models\informacion;

class inicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

       
       $categorias = categoria::all();
       return view('tienda/inicio', compact('categorias'));

       
         
    }
    public function info($slug)
    {       
            $informacion = informacion::where('slug', $slug)->first();
            
           if (!$informacion) {
                abort(404, 'Categoría no encontrada');
            }
       // return view('tienda/informacion');
            return view('tienda.informacion', compact('informacion'));
        
        
    }
   
   
   

  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
