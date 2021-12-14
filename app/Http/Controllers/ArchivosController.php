<?php

namespace App\Http\Controllers;

use App\Models\Archivos;
use Illuminate\Http\Request;

class ArchivosController extends Controller
{
    public function inicio(){
        $productos = Archivos::orderBy('id', 'desc')->paginate(10);

        return view('mostrar.mostrar', compact('productos'));

    }

    
    public function store(Request $request){

        $request->validate([
            'nombre' => 'required', 'archivo' => 'required|image|mimes:jpeg,jpg,png,svg,PDF|max:34480',
        ]); 

        $producto = $request-> except('_token');

        if($imagen = $request->file('archivo')) {
            $rutaGuardarImg = 'img/archivos/';
            $imagenUsuario = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenUsuario);
            $producto['archivo'] = "$imagenUsuario";             
        }
        Archivos::create($producto);

        return redirect()->route('home', $producto);
    }
    public function mostrar($id){

        $producto = Archivos::find($id);

        return view('mostrar.mostrar2', compact('producto'));        

    } 
    public function destroy($id) {

        $producto =Archivos::find($id);
        $producto->delete();
        return redirect()->route('mostrar.mostrar');
    }
}
