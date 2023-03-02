<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artista;

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
            'fotografia' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        // Procesamiento de datos de entrada y almacenamiento en la base de datos
        $artista = new Artista();
        $artista->nombre = $request->input('nombre');
        $artista->fecha_nacimiento = $request->input('fecha_nacimiento');
        $artista->nacionalidad = $request->input('nacionalidad');
        $artista->biografia = $request->input('biografia');
        
        // Subir la imagen
        if ($request->hasFile('fotografia')) {
            $image = $request->file('fotografia');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/imagenes');
            $image->move($destinationPath, $filename);
            $artista->fotografia = $filename;
        }
        
        $artista->save();
    
        // Redirigir al usuario a la vista de lista de artistas
        return redirect()->route('addArtist')
                         ->with('success','Artista creado satisfactoriamente.');
    }

    public function show_in_list($id)
    {
        $artista = Artista::find($id);
        return view('menu.recorridoObra', ['artista' => $artista]);       
    }
}
