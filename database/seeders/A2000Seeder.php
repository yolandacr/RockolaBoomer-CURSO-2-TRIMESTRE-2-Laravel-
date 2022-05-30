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

        // CANCIONES DE LA 1 A LA 10
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

        //CANCIONES DE LA 11 A LA 20

        $cancion11 = new Cancione();
        $cancion11->nombre = "en el 2000";
        $cancion11->categoria = "AÑOS2000";
        $cancion11->ruta = "sonidos/AÑOS2000/2000.wav";
        $cancion11-> save();

        $cancion12 = new Cancione();
        $cancion12->nombre = "all the things she said";
        $cancion12->categoria = "AÑOS2000";
        $cancion12->ruta = "sonidos/AÑOS2000/tatu.wav";
        $cancion12-> save();

        $cancion13 = new Cancione();
        $cancion13->nombre = "bésame en la boca";
        $cancion13->categoria = "AÑOS2000";
        $cancion13->ruta = "sonidos/AÑOS2000/lorca.wav";
        $cancion13-> save();

        $cancion14 = new Cancione();
        $cancion14->nombre = "cherry lips";
        $cancion14->categoria = "AÑOS2000";
        $cancion14->ruta = "sonidos/AÑOS2000/garbage.wav";
        $cancion14-> save();

        $cancion15 = new Cancione();
        $cancion15->nombre = "cuando nadie me ve";
        $cancion15->categoria = "AÑOS2000";
        $cancion15->ruta = "sonidos/AÑOS2000/sanz.wav";
        $cancion15-> save();

        $cancion16 = new Cancione();
        $cancion16->nombre = "cuatro elementos";
        $cancion16->categoria = "AÑOS2000";
        $cancion16->ruta = "sonidos/AÑOS2000/musicalite.wav";
        $cancion16-> save();

        $cancion17 = new Cancione();
        $cancion17->nombre = "dice lo que siente";
        $cancion17->categoria = "AÑOS2000";
        $cancion17->ruta = "sonidos/AÑOS2000/miranda.wav";
        $cancion17-> save();

        $cancion18 = new Cancione();
        $cancion18->nombre = "dulce locura";
        $cancion18->categoria = "AÑOS2000";
        $cancion18->ruta = "sonidos/AÑOS2000/oreja.wav";
        $cancion18-> save();

        $cancion19 = new Cancione();
        $cancion19->nombre = "en vela";
        $cancion19->categoria = "AÑOS2000";
        $cancion19->ruta = "sonidos/AÑOS2000/fuga.wav";
        $cancion19-> save();

        $cancion20 = new Cancione();
        $cancion20->nombre = "estoy hecho a pedacitos de ti";
        $cancion20->categoria = "AÑOS2000";
        $cancion20->ruta = "sonidos/AÑOS2000/orozco.wav";
        $cancion20-> save();


         //CANCIONES DE LA 21 A LA 30

        $cancion21 = new Cancione();
        $cancion21->nombre = "i write sins not tragedies";
        $cancion21->categoria = "AÑOS2000";
        $cancion21->ruta = "sonidos/AÑOS2000/tragedies.wav";
        $cancion21-> save();

        $cancion22 = new Cancione();
        $cancion22->nombre = "just like a pill";
        $cancion22->categoria = "AÑOS2000";
        $cancion22->ruta = "sonidos/AÑOS2000/pill.wav";
        $cancion22-> save();

        $cancion23 = new Cancione();
        $cancion23->nombre = "labios rotos";
        $cancion23->categoria = "AÑOS2000";
        $cancion23->ruta = "sonidos/AÑOS2000/zoe.wav";
        $cancion23-> save();

        $cancion24 = new Cancione();
        $cancion24->nombre = "mi música es tu voz";
        $cancion24->categoria = "AÑOS2000";
        $cancion24->ruta = "sonidos/AÑOS2000/ot.wav";
        $cancion24-> save();

        $cancion25 = new Cancione();
        $cancion25->nombre = "microdancing";
        $cancion25->categoria = "AÑOS2000";
        $cancion25->ruta = "sonidos/AÑOS2000/microdancing.wav";
        $cancion25-> save();

        $cancion26 = new Cancione();
        $cancion26->nombre = "quiéreme otra vez";
        $cancion26->categoria = "AÑOS2000";
        $cancion26->ruta = "sonidos/AÑOS2000/quiereme.wav";
        $cancion26-> save();

        $cancion27 = new Cancione();
        $cancion27->nombre = "retorciendo palabras";
        $cancion27->categoria = "AÑOS2000";
        $cancion27->ruta = "sonidos/AÑOS2000/fangoria.wav";
        $cancion27-> save();

        $cancion28 = new Cancione();
        $cancion28->nombre = "si no estás";
        $cancion28->categoria = "AÑOS2000";
        $cancion28->ruta = "sonidos/AÑOS2000/estas.wav";
        $cancion28-> save();

        $cancion29 = new Cancione();
        $cancion29->nombre = "si tú te vas";
        $cancion29->categoria = "AÑOS2000";
        $cancion29->ruta = "sonidos/AÑOS2000/paulina.wav";
        $cancion29-> save();

        $cancion30 = new Cancione();
        $cancion30->nombre = "te comeré a besos";
        $cancion30->categoria = "AÑOS2000";
        $cancion30->ruta = "sonidos/AÑOS2000/comere.wav";
        $cancion30-> save();

        //CANCIONES DE LA 31 EN ADELANTE

        $cancion31 = new Cancione();
        $cancion31->nombre = "teen idle";
        $cancion31->categoria = "AÑOS2000";
        $cancion31->ruta = "sonidos/AÑOS2000/teen.wav";
        $cancion31-> save();

        $cancion32 = new Cancione();
        $cancion32->nombre = "use somebody";
        $cancion32->categoria = "AÑOS2000";
        $cancion32->ruta = "sonidos/AÑOS2000/kings.wav";
        $cancion32-> save();

        $cancion33 = new Cancione();
        $cancion33->nombre = "whore";
        $cancion33->categoria = "AÑOS2000";
        $cancion33->ruta = "sonidos/AÑOS2000/whore.wav";
        $cancion33-> save();
    }
}
