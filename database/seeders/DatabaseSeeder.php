<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            Categorias_TareasSeeder::class,
            Tipos_TareasSeeder::class,
            UsersSeeder::class,
            TareasSeeder::class,
            Categorias_tareasFactory::class,
            TareaFactory::class,
            Tipos_tareasFactory::class,
            UsuarioFactor::class,
        ]);
    }
}
