<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Cancione;
use App\Models\opcione;

/**
 * EN LA SIGUIENTE CLASE ESTÁN TODASLAS LLAMADAS A SEEDERS
 */

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CancionesA80Seeder::class);
        $this->call(OpcionesA80Seeder::class);
        //$this->call(A2000Seeder::class);
        //$this->call(OpcionesA2000Seeder::class);
        //$this->call(A90Seeder::class);
        //$this->call(OpcionesA90Seeder::class);
        //$this->call(ActualidadSeeder::class);
        //$this->call(OpcionesActualidadSeeder::class);
    }
}
