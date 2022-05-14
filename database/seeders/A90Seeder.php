<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Cancione;

class A90Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cancion1 = new Cancione();
        $cancion1->nombre = "me quedaré solo";
        $cancion1->categoria = "AÑOS90";
        $cancion1->ruta = "sonidos/AÑOS90/amistades.wav";

        $cancion1-> save();


        $cancion2 = new Cancione();
        $cancion2->nombre = "basket case";
        $cancion2->categoria = "AÑOS90";
        $cancion2->ruta = "sonidos/AÑOS90/basket.wav";

        $cancion2-> save();

        $cancion3 = new Cancione();
        $cancion3->nombre = "what's my age again";
        $cancion3->categoria = "AÑOS90";
        $cancion3->ruta = "sonidos/AÑOS90/blink.wav";

        $cancion3-> save();

        $cancion4 = new Cancione();
        $cancion4->nombre = "quit playing games (with my heart)";
        $cancion4->categoria = "AÑOS90";
        $cancion4->ruta = "sonidos/AÑOS90/bsb.wav";

        $cancion4-> save();

        $cancion5 = new Cancione();
        $cancion5->nombre = "vivimos siempre juntos";
        $cancion5->categoria = "AÑOS90";
        $cancion5->ruta = "sonidos/AÑOS90/cano.wav";

        $cancion5-> save();

        $cancion6 = new Cancione();
        $cancion6->nombre = "chiquilla";
        $cancion6->categoria = "AÑOS90";
        $cancion6->ruta = "sonidos/AÑOS90/chiquilla.wav";

        $cancion6-> save();

        $canncion7 = new Cancione();
        $canncion7->nombre = "desátame";
        $canncion7->categoria = "AÑOS90";
        $canncion7->ruta = "sonidos/AÑOS90/desatame.wav";

        $canncion7-> save();

        $cancion8 = new Cancione();
        $cancion8->nombre = "here with me";
        $cancion8->categoria = "AÑOS90";
        $cancion8->ruta = "sonidos/AÑOS90/dido.wav";

        $cancion8-> save();

        $cancion9 = new Cancione();
        $cancion9->nombre = "como camarón";
        $cancion9->categoria = "AÑOS90";
        $cancion9->ruta = "sonidos/AÑOS90/estopa.wav";

        $cancion9-> save();

        $cancion10 = new Cancione();
        $cancion10->nombre = "to the moon and back";
        $cancion10->categoria = "AÑOS90";
        $cancion10->ruta = "sonidos/AÑOS90/moon.wav";

        $cancion10-> save();

    }
}
