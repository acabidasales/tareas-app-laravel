<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Categorias_Tareas;

class Categorias_TareasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias_tareas = new Categorias_Tareas();
        $categorias_tareas->categoria = "comida";
        $categorias_tareas->descripcion = "Tareas relacionadas con la comida";
        $categorias_tareas->save();

        $categorias_tareas = new Categorias_Tareas();
        $categorias_tareas->categoria = "deporte";
        $categorias_tareas->descripcion = "Tareas relacionadas con el deporte";
        $categorias_tareas->save();
    }
}
