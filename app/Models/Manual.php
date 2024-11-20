<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manual extends Model
{
    use HasFactory;

    protected $table = 'manuales';

    // Si el nombre de la tabla en la base de datos no es "manuals", descomenta esta línea y ajusta el nombre de la tabla
    // protected $table = 'manuales'; 

    // Si no estás usando las columnas "created_at" y "updated_at" (timestamps), descomenta esta línea
    // public $timestamps = false;

    // Define qué campos pueden ser asignados masivamente
    protected $fillable = [
        'titulo',
        'descripcion',
        'archivo_pdf'
    ];
}
