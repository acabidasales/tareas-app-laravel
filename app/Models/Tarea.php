<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    protected $table = 'tareas';

    protected $primaryKey = 'id';

    public $timestamps = false;

    public function tipo()
    {
        return $this->belongsTo(Tipos_tareas::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categorias_tareas::class);
    }
}
