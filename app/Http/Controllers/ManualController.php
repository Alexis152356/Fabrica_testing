<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manual;

class ManualController extends Controller
{
    // Mostrar el formulario para subir un manual
    public function index()
    {
        return view('manuales.index');
    }

    // Almacenar el archivo y los datos del manual
    public function store(Request $request)
    {
        // Validación de los datos del formulario
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'archivo_pdf' => 'required|mimes:pdf|max:10240', // 10MB máximo
        ]);

        // Subir archivo PDF
        $path = $request->file('archivo_pdf')->store('manuales', 'public');

        // Guardar en la base de datos
        Manual::create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'archivo_pdf' => $path,
        ]);

        // Redirigir con mensaje de éxito
        return back()->with('success', 'Manual subido correctamente.');
    }

    // Listar los manuales subidos
    public function list()
    {
        $manuales = Manual::all();
        return view('manuales.list', compact('manuales'));
    }
}
