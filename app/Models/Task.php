<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'is_completed'];
}

// El factory sirve para la carga masiva de datos. No nos interesa usarlo
// ya que queremos poner los datos en el formulario y actualizar la base 
// de datos por medio de CRUD, así que excluimos los dos campos que nos conciernen
