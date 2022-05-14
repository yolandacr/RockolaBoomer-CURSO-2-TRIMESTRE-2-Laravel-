<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Cancione;

class ActualidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cancion1 = new Cancione();
        $cancion1->nombre = "que se joda todo lo demás";
        $cancion1->categoria = "ACTUALIDAD";
        $cancion1->ruta = "sonidos/ACTUALIDAD/aliceWonder.wav";

        $cancion1-> save();


        $cancion2 = new Cancione();
        $cancion2->nombre = "amapolas";
        $cancion2->categoria = "ACTUALIDAD";
        $cancion2->ruta = "sonidos/ACTUALIDAD/amapolas.wav";

        $cancion2-> save();

        $cancion3 = new Cancione();
        $cancion3->nombre = "berlin u5";
        $cancion3->categoria = "ACTUALIDAD";
        $cancion3->ruta = "sonidos/ACTUALIDAD/berlin.wav";

        $cancion3-> save();

        $cancion4 = new Cancione();
        $cancion4->nombre = "cross me";
        $cancion4->categoria = "ACTUALIDAD";
        $cancion4->ruta = "sonidos/ACTUALIDAD/cross.wav";

        $cancion4-> save();

        $cancion5 = new Cancione();
        $cancion5->nombre = "forever";
        $cancion5->categoria = "ACTUALIDAD";
        $cancion5->ruta = "sonidos/ACTUALIDAD/forever.wav";

        $cancion5-> save();

        $cancion6 = new Cancione();
        $cancion6->nombre = "niña de la escuela";
        $cancion6->categoria = "ACTUALIDAD";
        $cancion6->ruta = "sonidos/ACTUALIDAD/escuela.wav";

        $cancion6-> save();

        $canncion7 = new Cancione();
        $canncion7->nombre = "la fama";
        $canncion7->categoria = "ACTUALIDAD";
        $canncion7->ruta = "sonidos/ACTUALIDAD/fama.wav";

        $canncion7-> save();

        $cancion8 = new Cancione();
        $cancion8->nombre = "mi mala";
        $cancion8->categoria = "ACTUALIDAD";
        $cancion8->ruta = "sonidos/ACTUALIDAD/mala.wav";

        $cancion8-> save();

        $cancion9 = new Cancione();
        $cancion9->nombre = "wolves";
        $cancion9->categoria = "ACTUALIDAD";
        $cancion9->ruta = "sonidos/ACTUALIDAD/wolves.wav";

        $cancion9-> save();

        $cancion10 = new Cancione();
        $cancion10->nombre = "todo de ti";
        $cancion10->categoria = "ACTUALIDAD";
        $cancion10->ruta = "sonidos/ACTUALIDAD/rauw.wav";

        $cancion10-> save();

    }
}
