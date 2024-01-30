<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Tipos_Tareas;

class Tipos_TareasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipos_tareas = new Tipos_Tareas();
        $tipos_tareas->tipo = "comun";
        $tipos_tareas->descripcion = "Tareas que aparecen de forma comun";
        $tipos_tareas->save();
    }
}
