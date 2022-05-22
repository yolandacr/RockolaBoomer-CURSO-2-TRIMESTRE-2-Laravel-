<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Cancione;

/**
 * CLASE SEEDER DE LAS CANCIONES DE LOS AÑOS 80
 * 
 * @author yolanda cordero
 *
 */

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


        $cancion11 = new Cancione();
        $cancion11->nombre = "(i just) died in your arms";
        $cancion11->categoria = "AÑOS80";
        $cancion11->ruta = "sonidos/AÑOS80/arms.wav";
        $cancion11-> save();

        $cancion12 = new Cancione();
        $cancion12->nombre = "heart of glass";
        $cancion12->categoria = "AÑOS80";
        $cancion12->ruta = "sonidos/AÑOS80/glass.wav";
        $cancion12-> save();

        $cancion13 = new Cancione();
        $cancion13->nombre = "holding out for a hero";
        $cancion13->categoria = "AÑOS80";
        $cancion13->ruta = "sonidos/AÑOS80/hero.wav";
        $cancion13-> save();

        $cancion14 = new Cancione();
        $cancion14->nombre = "i want to break free";
        $cancion14->categoria = "AÑOS80";
        $cancion14->ruta = "sonidos/AÑOS80/queen.wav";
        $cancion14-> save();

        $cancion15 = new Cancione();
        $cancion15->nombre = "i want to know what love is";
        $cancion15->categoria = "AÑOS80";
        $cancion15->ruta = "sonidos/AÑOS80/foreigner.wav";
        $cancion15-> save();

        $cancion16 = new Cancione();
        $cancion16->nombre = "ilarie";
        $cancion16->categoria = "AÑOS80";
        $cancion16->ruta = "sonidos/AÑOS80/ilarie.wav";
        $cancion16-> save();

        $cancion17 = new Cancione();
        $cancion17->nombre = "i'm so excited";
        $cancion17->categoria = "AÑOS80";
        $cancion17->ruta = "sonidos/AÑOS80/excited.wav";
        $cancion17-> save();

        $cancion18 = new Cancione();
        $cancion18->nombre = "it must have been love";
        $cancion18->categoria = "AÑOS80";
        $cancion18->ruta = "sonidos/AÑOS80/roxette.wav";
        $cancion18-> save();

        $cancion19 = new Cancione();
        $cancion19->nombre = "la chica de ayer";
        $cancion19->categoria = "AÑOS80";
        $cancion19->ruta = "sonidos/AÑOS80/nacha.wav";
        $cancion19-> save();

        $cancion20 = new Cancione();
        $cancion20->nombre = "la fuerza del destino";
        $cancion20->categoria = "AÑOS80";
        $cancion20->ruta = "sonidos/AÑOS80/destino.wav";
        $cancion20-> save();

        $cancion21 = new Cancione();
        $cancion21->nombre = "like a prayer";
        $cancion21->categoria = "AÑOS80";
        $cancion21->ruta = "sonidos/AÑOS80/prayer.wav";
        $cancion21-> save();

        $cancion22 = new Cancione();
        $cancion22->nombre = "livin' on a prayer";
        $cancion22->categoria = "AÑOS80";
        $cancion22->ruta = "sonidos/AÑOS80/jovi.wav";
        $cancion22-> save();

        $cancion23 = new Cancione();
        $cancion23->nombre = "maniac";
        $cancion23->categoria = "AÑOS80";
        $cancion23->ruta = "sonidos/AÑOS80/maniac.wav";
        $cancion23-> save();

        $cancion24 = new Cancione();
        $cancion24->nombre = "matador";
        $cancion24->categoria = "AÑOS80";
        $cancion24->ruta = "sonidos/AÑOS80/matador.wav";
        $cancion24-> save();

        $cancion25 = new Cancione();
        $cancion25->nombre = "material girl";
        $cancion25->categoria = "AÑOS80";
        $cancion25->ruta = "sonidos/AÑOS80/madonna.wav";
        $cancion25-> save();

        $cancion26 = new Cancione();
        $cancion26->nombre = "somebody that i used to know";
        $cancion26->categoria = "AÑOS80";
        $cancion26->ruta = "sonidos/AÑOS80/somebody.wav";
        $cancion26-> save();

        $cancion27 = new Cancione();
        $cancion27->nombre = "sweet child o mine";
        $cancion27->categoria = "AÑOS80";
        $cancion27->ruta = "sonidos/AÑOS80/guns.wav";
        $cancion27-> save();

        $cancion28 = new Cancione();
        $cancion28->nombre = "take on me";
        $cancion28->categoria = "AÑOS80";
        $cancion28->ruta = "sonidos/AÑOS80/aha.wav";
        $cancion28-> save();

        $cancion29 = new Cancione();
        $cancion29->nombre = "the final countdown";
        $cancion29->categoria = "AÑOS80";
        $cancion29->ruta = "sonidos/AÑOS80/europe.wav";
        $cancion29-> save();

        $cancion30 = new Cancione();
        $cancion30->nombre = "what a feeling";
        $cancion30->categoria = "AÑOS80";
        $cancion30->ruta = "sonidos/AÑOS80/flashdance.wav";
        $cancion30-> save();

        $cancion31 = new Cancione();
        $cancion31->nombre = "you are the one that i want";
        $cancion31->categoria = "AÑOS80";
        $cancion31->ruta = "sonidos/AÑOS80/grease.wav";
        $cancion31-> save();

        $cancion32 = new Cancione();
        $cancion32->nombre = "you shook me all night long";
        $cancion32->categoria = "AÑOS80";
        $cancion32->ruta = "sonidos/AÑOS80/acdc.wav";
        $cancion32-> save();
    }
}
