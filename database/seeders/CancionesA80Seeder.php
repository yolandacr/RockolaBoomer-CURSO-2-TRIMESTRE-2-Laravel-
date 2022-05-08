<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Cancione;

class CancionesA80Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a801 = new Cancione();
        $a801->nombre = "a little respect";
        $a801->categoria = "AÑOS80";
        $a801->ruta = "sonidos/AÑOS80/erasure.wav";

        $a801-> save();


        $a802 = new Cancione();
        $a802->nombre = "a quién le importa";
        $a802->categoria = "AÑOS80";
        $a802->ruta = "sonidos/AÑOS80/alaska.wav";

        $a802-> save();

        $a803 = new Cancione();
        $a803->nombre = "africa";
        $a803->categoria = "AÑOS80";
        $a803->ruta = "sonidos/AÑOS80/africa.wav";

        $a803-> save();

        $a804 = new Cancione();
        $a804->nombre = "beat it";
        $a804->categoria = "AÑOS80";
        $a804->ruta = "sonidos/AÑOS80/beat.wav";

        $a804-> save();

        $a805 = new Cancione();
        $a805->nombre = "billie jean";
        $a805->categoria = "AÑOS80";
        $a805->ruta = "sonidos/AÑOS80/bjean.wav";

        $a805-> save();

        $a806 = new Cancione();
        $a806->nombre = "cien gaviotas";
        $a806->categoria = "AÑOS80";
        $a806->ruta = "sonidos/AÑOS80/gaviotas.wav";

        $a806-> save();

        $a807 = new Cancione();
        $a807->nombre = "déjame";
        $a807->categoria = "AÑOS80";
        $a807->ruta = "sonidos/AÑOS80/dejame.wav";

        $a807-> save();

        $a808 = new Cancione();
        $a808->nombre = "devuélveme a mi chica";
        $a808->categoria = "AÑOS80";
        $a808->ruta = "sonidos/AÑOS80/hombresG.wav";

        $a808-> save();

        $a809 = new Cancione();
        $a809->nombre = "enamorado de la moda juvenil";
        $a809->categoria = "AÑOS80";
        $a809->ruta = "sonidos/AÑOS80/moda.wav";

        $a809-> save();

        $a810 = new Cancione();
        $a810->nombre = "every breath you take";
        $a810->categoria = "AÑOS80";
        $a810->ruta = "sonidos/AÑOS80/police.wav";

        $a810-> save();

    }
}
