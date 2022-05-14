<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Cancione;

class A2000Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cancion1 = new Cancione();
        $cancion1->nombre = "lamento boliviano";
        $cancion1->categoria = "AÑOS2000";
        $cancion1->ruta = "sonidos/AÑOS2000/boliviano.wav";

        $cancion1-> save();


        $cancion2 = new Cancione();
        $cancion2->nombre = "bring me to life";
        $cancion2->categoria = "AÑOS2000";
        $cancion2->ruta = "sonidos/AÑOS2000/bring.wav";

        $cancion2-> save();

        $cancion3 = new Cancione();
        $cancion3->nombre = "a contracorriente";
        $cancion3->categoria = "AÑOS2000";
        $cancion3->ruta = "sonidos/AÑOS2000/contracorriente.wav";

        $cancion3-> save();

        $cancion4 = new Cancione();
        $cancion4->nombre = "soldadito marinero";
        $cancion4->categoria = "AÑOS2000";
        $cancion4->ruta = "sonidos/AÑOS2000/fito.wav";

        $cancion4-> save();

        $cancion5 = new Cancione();
        $cancion5->nombre = "gods & monsters";
        $cancion5->categoria = "AÑOS2000";
        $cancion5->ruta = "sonidos/AÑOS2000/gods.wav";

        $cancion5-> save();

        $cancion6 = new Cancione();
        $cancion6->nombre = "the kill";
        $cancion6->categoria = "AÑOS2000";
        $cancion6->ruta = "sonidos/AÑOS2000/kill.wav";

        $cancion6-> save();

        $canncion7 = new Cancione();
        $canncion7->nombre = "fiesta pagana";
        $canncion7->categoria = "AÑOS2000";
        $canncion7->ruta = "sonidos/AÑOS2000/mago.wav";

        $canncion7-> save();

        $cancion8 = new Cancione();
        $cancion8->nombre = "hysteria";
        $cancion8->categoria = "AÑOS2000";
        $cancion8->ruta = "sonidos/AÑOS2000/muse.wav";

        $cancion8-> save();

        $cancion9 = new Cancione();
        $cancion9->nombre = "yo pienso en aquella tarde";
        $cancion9->categoria = "AÑOS2000";
        $cancion9->ruta = "sonidos/AÑOS2000/pereza.wav";

        $cancion9-> save();

        $cancion10 = new Cancione();
        $cancion10->nombre = "torero";
        $cancion10->categoria = "AÑOS2000";
        $cancion10->ruta = "sonidos/AÑOS2000/torero.wav";

        $cancion10-> save();

    }
}
