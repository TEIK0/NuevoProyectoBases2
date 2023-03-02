<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artista;
use App\Models\Pintura;

class ArtistasController extends Controller
{
    //
    public function index()
    {
        $artistas = Artista::all();
        return view('menu.recorridoArtista', ['artistas' =>$artistas]);
    }
       
    public function store(Request $request){
        // Validación de datos de entrada
        $validatedData = $request->validate([
            'nombre' => 'required|min:3|max:255',
            'fecha_nacimiento' => 'required|date',
            'nacionalidad' => 'required|max:50|min:3',
            'biografia' => 'required|min:3',
        ]);
    
        // Procesamiento de datos de entrada y almacenamiento en la base de datos
        $artista = new Artista();
        $artista->nombre = $request->input('nombre');
        $artista->fecha_nacimiento = $request->input('fecha_nacimiento');
        $artista->nacionalidad = $request->input('nacionalidad');
        $artista->biografia = $request->input('biografia');
        $artista->image_link = $request->input('image_link');
        
        $artista->save();
    
        // Redirigir al usuario a la vista de lista de artistas
        return redirect()->route('addArtist')
                         ->with('success','Artista creado satisfactoriamente.');
    }

    public function show($id){
        $artista = Artista::find($id);
        $pinturas = Pintura::all();
        return view('mostrar.showArtista', ['artista' => $artista, 'pinturas' => $pinturas]);
    }
}
