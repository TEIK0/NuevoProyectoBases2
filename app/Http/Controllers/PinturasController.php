<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artista;
use App\Models\Pintura;

class PinturasController extends Controller
{
    //
    public function index()
    {
        $pinturas = Pintura::all();
        $artistas = Artista::all();
        return view('artist.AddObra', ['pinturas'=>$pinturas ,'artistas' =>$artistas]);
    }

    public function indexm()
    {
        $pinturas = Pintura::all();
        $artistas = Artista::all();
        return view('menu.recorridoObra', ['pinturas'=>$pinturas ,'artistas' =>$artistas]);
    }

    public function create(){
        $pinturas = new Pintura();
        $artistas = Artista::pluck('nombre','id');
        return view('menu.recorridoObra', ['pinturas'=>$pinturas ,'artistas' =>$artistas]);
    }
    public function store(Request $request)
    {
        // Validación de datos de entrada
        $validatedData = $request->validate([
            'nombre' => 'required|max:255',
            'fecha_creacion' => 'required|date',
            'artista_id' => 'required',
            'precio' => 'required|max:255',
            'tipo' => 'required',
            'fotografia' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        // Procesamiento de datos de entrada y almacenamiento en la base de datos
        $pintura = new Pintura();
        $pintura->nombre = $request->input('nombre');
        $pintura->fecha_creacion = $request->input('fecha_creacion');
        $pintura->artista_id = $request->input('artista_id');
        $pintura->precio = $request->input('precio');
        $pintura->tipo = $request->input('tipo');
        
        // Subir la imagen
        if ($request->hasFile('fotografia')) {
            $image = $request->file('fotografia');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/imagenes');
            $image->move($destinationPath, $filename);
            $pintura->fotografia = $filename;
        }
        
        $pintura->save();
    
        // Redirigir al usuario a la vista de lista de artistas
        return redirect()->route('addPintura')
                         ->with('success','Obra creado satisfactoriamente.');
    }

    public function show($id){
        $pinturas = Pintura::find($id);
        return view('menu.recorridoObra', ['pinturas' => $pinturas]);
    }
}
