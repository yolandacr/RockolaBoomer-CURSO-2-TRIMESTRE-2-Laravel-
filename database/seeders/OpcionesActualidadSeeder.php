<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\opcione;
use Illuminate\Support\Facades\DB;

class OpcionesActualidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cancion1_opcion1 = new opcione();
        $cancion1_opcion1->nombre = "que se joda todo lo demás";
        $cancion1_opcion1->id_cancion = 31;

        $cancion1_opcion1-> save();

        $cancion1_opcion2 = new opcione();
        $cancion1_opcion2->nombre = "el viaje";
        $cancion1_opcion2->id_cancion = 31;

        $cancion1_opcion2-> save();

        $cancion1_opcion3 = new opcione();
        $cancion1_opcion3->nombre = "quizás";
        $cancion1_opcion3->id_cancion = 31;

        $cancion1_opcion3-> save();

        $cancion1_opcion4 = new opcione();
        $cancion1_opcion4->nombre = "el orden y el desastre";
        $cancion1_opcion4->id_cancion = 31;

        $cancion1_opcion4-> save();


        $cancion2_opcion1 = new opcione();
        $cancion2_opcion1->nombre = "amapolas";
        $cancion2_opcion1->id_cancion = 32;
        $cancion2_opcion1-> save();

        $cancion2_opcion2 = new opcione();
        $cancion2_opcion2->nombre = "tú y yo";
        $cancion2_opcion2->id_cancion = 32;
        $cancion2_opcion2-> save();

        $cancion2_opcion3 = new opcione();
        $cancion2_opcion3->nombre = "centro del universo";
        $cancion2_opcion3->id_cancion = 32;
        $cancion2_opcion3-> save();

        $cancion2_opcion4 = new opcione();
        $cancion2_opcion4->nombre = "hasta que salte la presión";
        $cancion2_opcion4->id_cancion = 32;
        $cancion2_opcion4-> save();


        $cancion3_opcion1 = new opcione();
        $cancion3_opcion1->nombre = "berlin u5";
        $cancion3_opcion1->id_cancion = 33;
        $cancion3_opcion1-> save();

        $cancion3_opcion2 = new opcione();
        $cancion3_opcion2->nombre = "llévame a bailar";
        $cancion3_opcion2->id_cancion = 33;

        $cancion3_opcion2-> save();

        $cancion3_opcion3 = new opcione();
        $cancion3_opcion3->nombre = "como si el mundo no se fuera a acabar";
        $cancion3_opcion3->id_cancion = 33;

        $cancion3_opcion3-> save();

        $cancion3_opcion4 = new opcione();
        $cancion3_opcion4->nombre = "animal";
        $cancion3_opcion4->id_cancion = 33;

        $cancion3_opcion4-> save();

        $cancion4_opcion1 = new opcione();
        $cancion4_opcion1->nombre = "cross me";
        $cancion4_opcion1->id_cancion = 34;

        $cancion4_opcion1-> save();

        $cancion4_opcion2 = new opcione();
        $cancion4_opcion2->nombre = "give me love";
        $cancion4_opcion2->id_cancion = 34;

        $cancion4_opcion2-> save();

        $cancion4_opcion3 = new opcione();
        $cancion4_opcion3->nombre = "nobody's coming close";
        $cancion4_opcion3->id_cancion = 34;

        $cancion4_opcion3-> save();

        $cancion4_opcion4 = new opcione();
        $cancion4_opcion4->nombre = "photograph";
        $cancion4_opcion4->id_cancion = 34;

        $cancion4_opcion4-> save();

        $cancion5_opcion1 = new opcione();
        $cancion5_opcion1->nombre = "forever";
        $cancion5_opcion1->id_cancion = 35;

        $cancion5_opcion1-> save();

        $cancion5_opcion2 = new opcione();
        $cancion5_opcion2->nombre = "I would hate you";
        $cancion5_opcion2->id_cancion = 35;

        $cancion5_opcion2-> save();

        $cancion5_opcion3 = new opcione();
        $cancion5_opcion3->nombre = "savor the pain";
        $cancion5_opcion3->id_cancion = 35;

        $cancion5_opcion3-> save();

        $cancion5_opcion4 = new opcione();
        $cancion5_opcion4->nombre = "savor the taste";
        $cancion5_opcion4->id_cancion = 35;

        $cancion5_opcion4-> save();

        $cancion6_opcion1 = new opcione();
        $cancion6_opcion1->nombre = "niña de la escuela";
        $cancion6_opcion1->id_cancion = 36;

        $cancion6_opcion1-> save();

        $cancion6_opcion2 = new opcione();
        $cancion6_opcion2->nombre = "¿me recuerdas?";
        $cancion6_opcion2->id_cancion = 36;

        $cancion6_opcion2-> save();

        $cancion6_opcion3 = new opcione();
        $cancion6_opcion3->nombre = "soy aquella niña";
        $cancion6_opcion3->id_cancion = 36;

        $cancion6_opcion3-> save();

        $cancion6_opcion4 = new opcione();
        $cancion6_opcion4->nombre = "la niña";
        $cancion6_opcion4->id_cancion = 36;

        $cancion6_opcion4-> save();

        $cancion7_opcion1 = new opcione();
        $cancion7_opcion1->nombre = "la fama";
        $cancion7_opcion1->id_cancion = 37;

        $cancion7_opcion1-> save();

        $cancion7_opcion2 = new opcione();
        $cancion7_opcion2->nombre = "no creas que me dolió";
        $cancion7_opcion2->id_cancion = 37;

        $cancion7_opcion2-> save();

        $cancion7_opcion3 = new opcione();
        $cancion7_opcion3->nombre = "la obsesión";
        $cancion7_opcion3->id_cancion = 37;

        $cancion7_opcion3-> save();

        $cancion7_opcion4 = new opcione();
        $cancion7_opcion4->nombre = "miles de canciones";
        $cancion7_opcion4->id_cancion = 37;

        $cancion7_opcion4-> save();

        $cancion8_opcion1 = new opcione();
        $cancion8_opcion1->nombre = "mi mala";
        $cancion8_opcion1->id_cancion = 38;

        $cancion8_opcion1-> save();

        $cancion8_opcion2 = new opcione();
        $cancion8_opcion2->nombre = "si tú no me quieres";
        $cancion8_opcion2->id_cancion = 38;

        $cancion8_opcion2-> save();

        $cancion8_opcion3 = new opcione();
        $cancion8_opcion3->nombre = "las cosas claras";
        $cancion8_opcion3->id_cancion = 38;

        $cancion8_opcion3-> save();

        $cancion8_opcion4 = new opcione();
        $cancion8_opcion4->nombre = "no me esperes";
        $cancion8_opcion4->id_cancion = 38;

        $cancion8_opcion4-> save();

        $cancion10_opcion1 = new opcione();
        $cancion10_opcion1->nombre = "wolves";
        $cancion10_opcion1->id_cancion = 39;

        $cancion10_opcion1-> save();

        $cancion9_opcion2 = new opcione();
        $cancion9_opcion2->nombre = "Through the jungle";
        $cancion9_opcion2->id_cancion = 39;

        $cancion9_opcion2-> save();

        $cancion9_opcion3 = new opcione();
        $cancion9_opcion3->nombre = "To get to you";
        $cancion9_opcion3->id_cancion = 39;

        $cancion9_opcion3-> save();

        $cancion9_opcion4 = new opcione();
        $cancion9_opcion4->nombre = "dark side of the moon";
        $cancion9_opcion4->id_cancion = 39;

        $cancion9_opcion4-> save();

        $cancion10_opcion1 = new opcione();
        $cancion10_opcion1->nombre = "todo de ti";
        $cancion10_opcion1->id_cancion = 40;

        $cancion10_opcion1-> save();

        $cancion10_opcion2 = new opcione();
        $cancion10_opcion2->nombre = "aceleras mis latidos";
        $cancion10_opcion2->id_cancion = 40;

        $cancion10_opcion2-> save();

        $cancion10_opcion3 = new opcione();
        $cancion10_opcion3->nombre = "esos ojos negros";
        $cancion10_opcion3->id_cancion = 40;

        $cancion10_opcion3-> save();

        $cancion10_opcion4 = new opcione();
        $cancion10_opcion4->nombre = "lo que me gusta de ti";
        $cancion10_opcion4->id_cancion = 40;

        $cancion10_opcion4-> save();
    }
}
