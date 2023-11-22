<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Comment;
use App\Models\Franquicia;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //eliminar carpeta franquicias para que
        //cada que se ejecute el seeder se borren los anteriores
        Storage::deleteDirectory('franquicias');
        //crear carpeta para almacenar las imagenes
        Storage::makeDirectory('franquicias');
        //llamar al seeder
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        
        //Factories
        Franquicia::factory(15)->create();
        Comment::factory(20)->create();
    }
}
