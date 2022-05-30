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

        //CANCIONES DE LA 1 A LA 10
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

        //CANCIONES DE LA 11 A LA 20

        $cancion11 = new Cancione();
        $cancion11->nombre = "ateo";
        $cancion11->categoria = "ACTUALIDAD";
        $cancion11->ruta = "sonidos/ACTUALIDAD/ateo.wav";
        $cancion11-> save();

        $cancion12 = new Cancione();
        $cancion12->nombre = "love it when you hate me";
        $cancion12->categoria = "ACTUALIDAD";
        $cancion12->ruta = "sonidos/ACTUALIDAD/avril.wav";
        $cancion12-> save();

        $cancion13 = new Cancione();
        $cancion13->nombre = "bam bam";
        $cancion13->categoria = "ACTUALIDAD";
        $cancion13->ruta = "sonidos/ACTUALIDAD/bam.wav";
        $cancion13-> save();

        $cancion14 = new Cancione();
        $cancion14->nombre = "hay que vivir el momento";
        $cancion14->categoria = "ACTUALIDAD";
        $cancion14->ruta = "sonidos/ACTUALIDAD/carrasco.mp3";
        $cancion14-> save();

        $cancion15 = new Cancione();
        $cancion15->nombre = "demasiado tarde";
        $cancion15->categoria = "ACTUALIDAD";
        $cancion15->ruta = "sonidos/ACTUALIDAD/cepeda.wav";
        $cancion15-> save();

        $cancion16 = new Cancione();
        $cancion16->nombre = "dile a los demás";
        $cancion16->categoria = "ACTUALIDAD";
        $cancion16->ruta = "sonidos/ACTUALIDAD/dani.wav";
        $cancion16-> save();

        $cancion17 = new Cancione();
        $cancion17->nombre = "crazy what love can do";
        $cancion17->categoria = "ACTUALIDAD";
        $cancion17->ruta = "sonidos/ACTUALIDAD/guetta.wav";
        $cancion17-> save();

        $cancion18 = new Cancione();
        $cancion18->nombre = "bad habits";
        $cancion18->categoria = "ACTUALIDAD";
        $cancion18->ruta = "sonidos/ACTUALIDAD/habits.wav";
        $cancion18-> save();

        $cancion19 = new Cancione();
        $cancion19->nombre = "as it was";
        $cancion19->categoria = "ACTUALIDAD";
        $cancion19->ruta = "sonidos/ACTUALIDAD/harry.wav";
        $cancion19-> save();

        $cancion20 = new Cancione();
        $cancion20->nombre = "dancing feet";
        $cancion20->categoria = "ACTUALIDAD";
        $cancion20->ruta = "sonidos/ACTUALIDAD/kygo.wav";
        $cancion20-> save();


         //CANCIONES DE LA 21 A LA 30

        $cancion21 = new Cancione();
        $cancion21->nombre = "cuestión de suerte";
        $cancion21->categoria = "ACTUALIDAD";
        $cancion21->ruta = "sonidos/ACTUALIDAD/lacunza.mp3";
        $cancion21-> save();

        $cancion22 = new Cancione();
        $cancion22->nombre = "llueve sobre mojado";
        $cancion22->categoria = "ACTUALIDAD";
        $cancion22->ruta = "sonidos/ACTUALIDAD/llueve.wav";
        $cancion22-> save();

        $cancion23 = new Cancione();
        $cancion23->nombre = "plan a";
        $cancion23->categoria = "ACTUALIDAD";
        $cancion23->ruta = "sonidos/ACTUALIDAD/londra.mp3";
        $cancion23-> save();

        $cancion24 = new Cancione();
        $cancion24->nombre = "i wanna be your slave";
        $cancion24->categoria = "ACTUALIDAD";
        $cancion24->ruta = "sonidos/ACTUALIDAD/maneskin.wav";
        $cancion24-> save();

        $cancion25 = new Cancione();
        $cancion25->nombre = "fuera de mercado";
        $cancion25->categoria = "ACTUALIDAD";
        $cancion25->ruta = "sonidos/ACTUALIDAD/mercado.wav";
        $cancion25-> save();

        $cancion26 = new Cancione();
        $cancion26->nombre = "salimo de noche";
        $cancion26->categoria = "ACTUALIDAD";
        $cancion26->ruta = "sonidos/ACTUALIDAD/salimo.wav";
        $cancion26-> save();

        $cancion27 = new Cancione();
        $cancion27->nombre = "corazón mármol";
        $cancion27->categoria = "ACTUALIDAD";
        $cancion27->ruta = "sonidos/ACTUALIDAD/marmol.wav";
        $cancion27-> save();

        $cancion28 = new Cancione();
        $cancion28->nombre = "merichane";
        $cancion28->categoria = "ACTUALIDAD";
        $cancion28->ruta = "sonidos/ACTUALIDAD/merichane.wav";
        $cancion28-> save();

        $cancion29 = new Cancione();
        $cancion29->nombre = "te felicito";
        $cancion29->categoria = "ACTUALIDAD";
        $cancion29->ruta = "sonidos/ACTUALIDAD/felicito.wav";
        $cancion29-> save();

        $cancion30 = new Cancione();
        $cancion30->nombre = "stay";
        $cancion30->categoria = "ACTUALIDAD";
        $cancion30->ruta = "sonidos/ACTUALIDAD/stay.wav";
        $cancion30-> save();
    }
}
