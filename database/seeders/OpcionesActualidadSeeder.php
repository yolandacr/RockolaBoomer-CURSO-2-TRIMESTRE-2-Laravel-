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

        //CANCIONES 1 A 10
        $cancion1_opcion1 = new opcione();
        $cancion1_opcion1->nombre = "que se joda todo lo demás";
        $cancion1_opcion1->id_cancion = 96;
        $cancion1_opcion1-> save();

        $cancion1_opcion2 = new opcione();
        $cancion1_opcion2->nombre = "el viaje";
        $cancion1_opcion2->id_cancion = 96;
        $cancion1_opcion2-> save();

        $cancion1_opcion3 = new opcione();
        $cancion1_opcion3->nombre = "quizás";
        $cancion1_opcion3->id_cancion = 96;
        $cancion1_opcion3-> save();

        $cancion1_opcion4 = new opcione();
        $cancion1_opcion4->nombre = "el orden y el desastre";
        $cancion1_opcion4->id_cancion = 96;
        $cancion1_opcion4-> save();

        $cancion2_opcion1 = new opcione();
        $cancion2_opcion1->nombre = "amapolas";
        $cancion2_opcion1->id_cancion = 97;
        $cancion2_opcion1-> save();

        $cancion2_opcion2 = new opcione();
        $cancion2_opcion2->nombre = "tú y yo";
        $cancion2_opcion2->id_cancion = 97;
        $cancion2_opcion2-> save();

        $cancion2_opcion3 = new opcione();
        $cancion2_opcion3->nombre = "centro del universo";
        $cancion2_opcion3->id_cancion = 97;
        $cancion2_opcion3-> save();

        $cancion2_opcion4 = new opcione();
        $cancion2_opcion4->nombre = "hasta que salte la presión";
        $cancion2_opcion4->id_cancion = 97;
        $cancion2_opcion4-> save();

        $cancion3_opcion1 = new opcione();
        $cancion3_opcion1->nombre = "berlin u5";
        $cancion3_opcion1->id_cancion = 98;
        $cancion3_opcion1-> save();

        $cancion3_opcion2 = new opcione();
        $cancion3_opcion2->nombre = "llévame a bailar";
        $cancion3_opcion2->id_cancion = 98;
        $cancion3_opcion2-> save();

        $cancion3_opcion3 = new opcione();
        $cancion3_opcion3->nombre = "como si el mundo no se fuera a acabar";
        $cancion3_opcion3->id_cancion = 98;
        $cancion3_opcion3-> save();

        $cancion3_opcion4 = new opcione();
        $cancion3_opcion4->nombre = "animal";
        $cancion3_opcion4->id_cancion = 98;
        $cancion3_opcion4-> save();

        $cancion4_opcion1 = new opcione();
        $cancion4_opcion1->nombre = "cross me";
        $cancion4_opcion1->id_cancion = 99;
        $cancion4_opcion1-> save();

        $cancion4_opcion2 = new opcione();
        $cancion4_opcion2->nombre = "give me love";
        $cancion4_opcion2->id_cancion = 99;
        $cancion4_opcion2-> save();

        $cancion4_opcion3 = new opcione();
        $cancion4_opcion3->nombre = "nobody's coming close";
        $cancion4_opcion3->id_cancion = 99;
        $cancion4_opcion3-> save();

        $cancion4_opcion4 = new opcione();
        $cancion4_opcion4->nombre = "photograph";
        $cancion4_opcion4->id_cancion = 99;
        $cancion4_opcion4-> save();

        $cancion5_opcion1 = new opcione();
        $cancion5_opcion1->nombre = "forever";
        $cancion5_opcion1->id_cancion = 100;
        $cancion5_opcion1-> save();

        $cancion5_opcion2 = new opcione();
        $cancion5_opcion2->nombre = "i would hate you";
        $cancion5_opcion2->id_cancion = 100;
        $cancion5_opcion2-> save();

        $cancion5_opcion3 = new opcione();
        $cancion5_opcion3->nombre = "savor the pain";
        $cancion5_opcion3->id_cancion = 100;
        $cancion5_opcion3-> save();

        $cancion5_opcion4 = new opcione();
        $cancion5_opcion4->nombre = "savor the taste";
        $cancion5_opcion4->id_cancion = 100;
        $cancion5_opcion4-> save();

        $cancion6_opcion1 = new opcione();
        $cancion6_opcion1->nombre = "niña de la escuela";
        $cancion6_opcion1->id_cancion = 101;
        $cancion6_opcion1-> save();

        $cancion6_opcion2 = new opcione();
        $cancion6_opcion2->nombre = "¿me recuerdas?";
        $cancion6_opcion2->id_cancion = 101;
        $cancion6_opcion2-> save();

        $cancion6_opcion3 = new opcione();
        $cancion6_opcion3->nombre = "soy aquella niña";
        $cancion6_opcion3->id_cancion = 101;
        $cancion6_opcion3-> save();

        $cancion6_opcion4 = new opcione();
        $cancion6_opcion4->nombre = "la niña";
        $cancion6_opcion4->id_cancion = 101;
        $cancion6_opcion4-> save();

        $cancion7_opcion1 = new opcione();
        $cancion7_opcion1->nombre = "la fama";
        $cancion7_opcion1->id_cancion = 102;
        $cancion7_opcion1-> save();

        $cancion7_opcion2 = new opcione();
        $cancion7_opcion2->nombre = "no creas que me dolió";
        $cancion7_opcion2->id_cancion = 102;
        $cancion7_opcion2-> save();

        $cancion7_opcion3 = new opcione();
        $cancion7_opcion3->nombre = "la obsesión";
        $cancion7_opcion3->id_cancion = 102;
        $cancion7_opcion3-> save();

        $cancion7_opcion4 = new opcione();
        $cancion7_opcion4->nombre = "miles de canciones";
        $cancion7_opcion4->id_cancion = 102;
        $cancion7_opcion4-> save();

        $cancion8_opcion1 = new opcione();
        $cancion8_opcion1->nombre = "mi mala";
        $cancion8_opcion1->id_cancion = 103;
        $cancion8_opcion1-> save();

        $cancion8_opcion2 = new opcione();
        $cancion8_opcion2->nombre = "si tú no me quieres";
        $cancion8_opcion2->id_cancion = 103;
        $cancion8_opcion2-> save();

        $cancion8_opcion3 = new opcione();
        $cancion8_opcion3->nombre = "las cosas claras";
        $cancion8_opcion3->id_cancion = 103;
        $cancion8_opcion3-> save();

        $cancion8_opcion4 = new opcione();
        $cancion8_opcion4->nombre = "no me esperes";
        $cancion8_opcion4->id_cancion = 103;
        $cancion8_opcion4-> save();

        $cancion9_opcion1 = new opcione();
        $cancion9_opcion1->nombre = "wolves";
        $cancion9_opcion1->id_cancion = 104;
        $cancion9_opcion1-> save();

        $cancion9_opcion2 = new opcione();
        $cancion9_opcion2->nombre = "through the jungle";
        $cancion9_opcion2->id_cancion = 104;
        $cancion9_opcion2-> save();

        $cancion9_opcion3 = new opcione();
        $cancion9_opcion3->nombre = "to get to you";
        $cancion9_opcion3->id_cancion = 104;
        $cancion9_opcion3-> save();

        $cancion9_opcion4 = new opcione();
        $cancion9_opcion4->nombre = "dark side of the moon";
        $cancion9_opcion4->id_cancion = 104;
        $cancion9_opcion4-> save();

        $cancion10_opcion1 = new opcione();
        $cancion10_opcion1->nombre = "todo de ti";
        $cancion10_opcion1->id_cancion = 105;
        $cancion10_opcion1-> save();

        $cancion10_opcion2 = new opcione();
        $cancion10_opcion2->nombre = "aceleras mis latidos";
        $cancion10_opcion2->id_cancion = 105;
        $cancion10_opcion2-> save();

        $cancion10_opcion3 = new opcione();
        $cancion10_opcion3->nombre = "esos ojos negros";
        $cancion10_opcion3->id_cancion = 105;
        $cancion10_opcion3-> save();

        $cancion10_opcion4 = new opcione();
        $cancion10_opcion4->nombre = "lo que me gusta de ti";
        $cancion10_opcion4->id_cancion = 105;
        $cancion10_opcion4-> save();

        //CANCIONES 11 A LA 20

        $cancion11_opcion1 = new opcione();
        $cancion11_opcion1->nombre = "ateo";
        $cancion11_opcion1->id_cancion = 106;
        $cancion11_opcion1-> save();

        $cancion11_opcion2 = new opcione();
        $cancion11_opcion2->nombre = "ahora creo";
        $cancion11_opcion2->id_cancion = 106;
        $cancion11_opcion2-> save();

        $cancion11_opcion3 = new opcione();
        $cancion11_opcion3->nombre = "un milagro como tú";
        $cancion11_opcion3->id_cancion = 106;
        $cancion11_opcion3-> save();

        $cancion11_opcion4 = new opcione();
        $cancion11_opcion4->nombre = "eres mi religión";
        $cancion11_opcion4->id_cancion = 106;
        $cancion11_opcion4-> save();

        $cancion12_opcion1 = new opcione();
        $cancion12_opcion1->nombre = "love it when you hate me";
        $cancion12_opcion1->id_cancion = 107;
        $cancion12_opcion1-> save();

        $cancion12_opcion2 = new opcione();
        $cancion12_opcion2->nombre = "sk8ter boy";
        $cancion12_opcion2->id_cancion = 107;
        $cancion12_opcion2-> save();

        $cancion12_opcion3 = new opcione();
        $cancion12_opcion3->nombre = "love me";
        $cancion12_opcion3->id_cancion = 107;
        $cancion12_opcion3-> save();

        $cancion12_opcion4 = new opcione();
        $cancion12_opcion4->nombre = "hate me";
        $cancion12_opcion4->id_cancion = 107;
        $cancion12_opcion4-> save();

        $cancion13_opcion1 = new opcione();
        $cancion13_opcion1->nombre = "bam bam";
        $cancion13_opcion1->id_cancion = 108;
        $cancion13_opcion1-> save();

        $cancion13_opcion2 = new opcione();
        $cancion13_opcion2->nombre = "that's the life";
        $cancion13_opcion2->id_cancion = 108;
        $cancion13_opcion2-> save();

        $cancion13_opcion3 = new opcione();
        $cancion13_opcion3->nombre = "así es la vida";
        $cancion13_opcion3->id_cancion = 108;
        $cancion13_opcion3-> save();

        $cancion13_opcion4 = new opcione();
        $cancion13_opcion4->nombre = "dancing samba";
        $cancion13_opcion4->id_cancion = 108;
        $cancion13_opcion4-> save();

        $cancion14_opcion1 = new opcione();
        $cancion14_opcion1->nombre = "hay que vivir el momento";
        $cancion14_opcion1->id_cancion = 109;
        $cancion14_opcion1-> save();

        $cancion14_opcion2 = new opcione();
        $cancion14_opcion2->nombre = "la vida es así";
        $cancion14_opcion2->id_cancion = 109;
        $cancion14_opcion2-> save();

        $cancion14_opcion3 = new opcione();
        $cancion14_opcion3->nombre = "cada segundo";
        $cancion14_opcion3->id_cancion = 109;
        $cancion14_opcion3-> save();

        $cancion14_opcion4 = new opcione();
        $cancion14_opcion4->nombre = "ya no";
        $cancion14_opcion4->id_cancion = 109;
        $cancion14_opcion4-> save();

        $cancion15_opcion1 = new opcione();
        $cancion15_opcion1->nombre = "demasiado tarde";
        $cancion15_opcion1->id_cancion = 110;
        $cancion15_opcion1-> save();

        $cancion15_opcion2 = new opcione();
        $cancion15_opcion2->nombre = "haces que te quiera";
        $cancion15_opcion2->id_cancion = 110;
        $cancion15_opcion2-> save();

        $cancion15_opcion3 = new opcione();
        $cancion15_opcion3->nombre = "sentirme culpable";
        $cancion15_opcion3->id_cancion = 110;
        $cancion15_opcion3-> save();

        $cancion15_opcion4 = new opcione();
        $cancion15_opcion4->nombre = "para siempre";
        $cancion15_opcion4->id_cancion = 110;
        $cancion15_opcion4-> save();

        $cancion16_opcion1 = new opcione();
        $cancion16_opcion1->nombre = "dile a los demás";
        $cancion16_opcion1->id_cancion = 111;
        $cancion16_opcion1-> save();

        $cancion16_opcion2 = new opcione();
        $cancion16_opcion2->nombre = "disparos al aire";
        $cancion16_opcion2->id_cancion = 111;
        $cancion16_opcion2-> save();

        $cancion16_opcion3 = new opcione();
        $cancion16_opcion3->nombre = "perdido en la ciudad";
        $cancion16_opcion3->id_cancion = 111;
        $cancion16_opcion3-> save();

        $cancion16_opcion4 = new opcione();
        $cancion16_opcion4->nombre = "cosa de complicidad";
        $cancion16_opcion4->id_cancion = 111;
        $cancion16_opcion4-> save();

        $cancion17_opcion1 = new opcione();
        $cancion17_opcion1->nombre = "crazy what love can do";
        $cancion17_opcion1->id_cancion = 112;
        $cancion17_opcion1-> save();

        $cancion17_opcion2 = new opcione();
        $cancion17_opcion2->nombre = "summer bits";
        $cancion17_opcion2->id_cancion = 112;
        $cancion17_opcion2-> save();

        $cancion17_opcion3 = new opcione();
        $cancion17_opcion3->nombre = "when the lights go out";
        $cancion17_opcion3->id_cancion = 112;
        $cancion17_opcion3-> save();

        $cancion17_opcion4 = new opcione();
        $cancion17_opcion4->nombre = "the world is mine";
        $cancion17_opcion4->id_cancion = 112;
        $cancion17_opcion4-> save();

        $cancion18_opcion1 = new opcione();
        $cancion18_opcion1->nombre = "bad habits";
        $cancion18_opcion1->id_cancion = 113;
        $cancion18_opcion1-> save();

        $cancion18_opcion2 = new opcione();
        $cancion18_opcion2->nombre = "conversations with a stranger";
        $cancion18_opcion2->id_cancion = 113;
        $cancion18_opcion2-> save();

        $cancion18_opcion3 = new opcione();
        $cancion18_opcion3->nombre = "nothin' left to lose";
        $cancion18_opcion3->id_cancion = 113;
        $cancion18_opcion3-> save();

        $cancion18_opcion4 = new opcione();
        $cancion18_opcion4->nombre = "wide eyes";
        $cancion18_opcion4->id_cancion = 113;
        $cancion18_opcion4-> save();

        $cancion19_opcion1 = new opcione();
        $cancion19_opcion1->nombre = "as it was";
        $cancion19_opcion1->id_cancion = 114;
        $cancion19_opcion1-> save();

        $cancion19_opcion2 = new opcione();
        $cancion19_opcion2->nombre = "holdin' me back";
        $cancion19_opcion2->id_cancion = 114;
        $cancion19_opcion2-> save();

        $cancion19_opcion3 = new opcione();
        $cancion19_opcion3->nombre = "be replaced";
        $cancion19_opcion3->id_cancion = 114;
        $cancion19_opcion3-> save();

        $cancion19_opcion4 = new opcione();
        $cancion19_opcion4->nombre = "nobody's coming to help";
        $cancion19_opcion4->id_cancion = 114;
        $cancion19_opcion4-> save();

        $cancion20_opcion1 = new opcione();
        $cancion20_opcion1->nombre = "dancing feet";
        $cancion20_opcion1->id_cancion = 115;
        $cancion20_opcion1-> save();

        $cancion20_opcion2 = new opcione();
        $cancion20_opcion2->nombre = "tears for fears";
        $cancion20_opcion2->id_cancion = 115;
        $cancion20_opcion2-> save();

        $cancion20_opcion3 = new opcione();
        $cancion20_opcion3->nombre = "dance in the rain";
        $cancion20_opcion3->id_cancion = 115;
        $cancion20_opcion3-> save();

        $cancion20_opcion4 = new opcione();
        $cancion20_opcion4->nombre = "kiss the night";
        $cancion20_opcion4->id_cancion = 115;
        $cancion20_opcion4-> save();

        //CANCIONES 21 A 30

        $cancion21_opcion1 = new opcione();
        $cancion21_opcion1->nombre = "cuestión de suerte";
        $cancion21_opcion1->id_cancion = 116;
        $cancion21_opcion1-> save();

        $cancion21_opcion2 = new opcione();
        $cancion21_opcion2->nombre = "todo otra vez";
        $cancion21_opcion2->id_cancion = 116;
        $cancion21_opcion2-> save();

        $cancion21_opcion3 = new opcione();
        $cancion21_opcion3->nombre = "volver a encontrarte";
        $cancion21_opcion3->id_cancion = 116;
        $cancion21_opcion3-> save();

        $cancion21_opcion4 = new opcione();
        $cancion21_opcion4->nombre = "contigo todo es diferente";
        $cancion21_opcion4->id_cancion = 116;
        $cancion21_opcion4-> save();

        $cancion22_opcion1 = new opcione();
        $cancion22_opcion1->nombre = "llueve sobre mojado";
        $cancion22_opcion1->id_cancion = 117;
        $cancion22_opcion1-> save();

        $cancion22_opcion2 = new opcione();
        $cancion22_opcion2->nombre = "ya me he visto aquí";
        $cancion22_opcion2->id_cancion = 117;
        $cancion22_opcion2-> save();

        $cancion22_opcion3 = new opcione();
        $cancion22_opcion3->nombre = "arma letal";
        $cancion22_opcion3->id_cancion = 117;
        $cancion22_opcion3-> save();

        $cancion22_opcion4 = new opcione();
        $cancion22_opcion4->nombre = "eres mi debilidad";
        $cancion22_opcion4->id_cancion = 117;
        $cancion22_opcion4-> save();

        $cancion23_opcion1 = new opcione();
        $cancion23_opcion1->nombre = "plan a";
        $cancion23_opcion1->id_cancion = 118;
        $cancion23_opcion1-> save();

        $cancion23_opcion2 = new opcione();
        $cancion23_opcion2->nombre = "plan b";
        $cancion23_opcion2->id_cancion = 118;
        $cancion23_opcion2-> save();

        $cancion23_opcion3 = new opcione();
        $cancion23_opcion3->nombre = "mejor mañana";
        $cancion23_opcion3->id_cancion = 118;
        $cancion23_opcion3-> save();

        $cancion23_opcion4 = new opcione();
        $cancion23_opcion4->nombre = "excusas";
        $cancion23_opcion4->id_cancion = 118;
        $cancion23_opcion4-> save();

        $cancion24_opcion1 = new opcione();
        $cancion24_opcion1->nombre = "i wanna be your slave";
        $cancion24_opcion1->id_cancion = 119;
        $cancion24_opcion1-> save();

        $cancion24_opcion2 = new opcione();
        $cancion24_opcion2->nombre = "i will be your puppet";
        $cancion24_opcion2->id_cancion = 119;
        $cancion24_opcion2-> save();

        $cancion24_opcion3 = new opcione();
        $cancion24_opcion3->nombre = "your everything";
        $cancion24_opcion3->id_cancion = 119;
        $cancion24_opcion3-> save();

        $cancion24_opcion4 = new opcione();
        $cancion24_opcion4->nombre = "searching for redemption";
        $cancion24_opcion4->id_cancion = 119;
        $cancion24_opcion4-> save();

        $cancion25_opcion1 = new opcione();
        $cancion25_opcion1->nombre = "fuera de mercado";
        $cancion25_opcion1->id_cancion = 120;
        $cancion25_opcion1-> save();

        $cancion25_opcion2 = new opcione();
        $cancion25_opcion2->nombre = "mueve tu cuerpo";
        $cancion25_opcion2->id_cancion = 120;
        $cancion25_opcion2-> save();

        $cancion25_opcion3 = new opcione();
        $cancion25_opcion3->nombre = "felicidad eterna";
        $cancion25_opcion3->id_cancion = 120;
        $cancion25_opcion3-> save();

        $cancion25_opcion4 = new opcione();
        $cancion25_opcion4->nombre = "guerrero";
        $cancion25_opcion4->id_cancion = 120;
        $cancion25_opcion4-> save();

        $cancion26_opcion1 = new opcione();
        $cancion26_opcion1->nombre = "salimo de noche";
        $cancion26_opcion1->id_cancion = 121;
        $cancion26_opcion1-> save();

        $cancion26_opcion2 = new opcione();
        $cancion26_opcion2->nombre = "bandida";
        $cancion26_opcion2->id_cancion = 121;
        $cancion26_opcion2-> save();

        $cancion26_opcion3 = new opcione();
        $cancion26_opcion3->nombre = "vestido de dolce";
        $cancion26_opcion3->id_cancion = 121;
        $cancion26_opcion3-> save();

        $cancion26_opcion4 = new opcione();
        $cancion26_opcion4->nombre = "la fiesta no para";
        $cancion26_opcion4->id_cancion = 121;
        $cancion26_opcion4-> save();

        $cancion27_opcion1 = new opcione();
        $cancion27_opcion1->nombre = "corazón mármol";
        $cancion27_opcion1->id_cancion = 122;
        $cancion27_opcion1-> save();

        $cancion27_opcion2 = new opcione();
        $cancion27_opcion2->nombre = "roto por dentro";
        $cancion27_opcion2->id_cancion = 122;
        $cancion27_opcion2-> save();

        $cancion27_opcion3 = new opcione();
        $cancion27_opcion3->nombre = "vitrina de cristal";
        $cancion27_opcion3->id_cancion = 122;
        $cancion27_opcion3-> save();

        $cancion27_opcion4 = new opcione();
        $cancion27_opcion4->nombre = "vida visceral";
        $cancion27_opcion4->id_cancion = 122;
        $cancion27_opcion4-> save();

        $cancion28_opcion1 = new opcione();
        $cancion28_opcion1->nombre = "merichane";
        $cancion28_opcion1->id_cancion = 123;
        $cancion28_opcion1-> save();

        $cancion28_opcion2 = new opcione();
        $cancion28_opcion2->nombre = "yo estaba ahí";
        $cancion28_opcion2->id_cancion = 123;
        $cancion28_opcion2-> save();

        $cancion28_opcion3 = new opcione();
        $cancion28_opcion3->nombre = "eternos";
        $cancion28_opcion3->id_cancion = 123;
        $cancion28_opcion3-> save();

        $cancion28_opcion4 = new opcione();
        $cancion28_opcion4->nombre = "sin saber salir";
        $cancion28_opcion4->id_cancion = 123;
        $cancion28_opcion4-> save();

        $cancion29_opcion1 = new opcione();
        $cancion29_opcion1->nombre = "te felicito";
        $cancion29_opcion1->id_cancion = 124;
        $cancion29_opcion1-> save();

        $cancion29_opcion2 = new opcione();
        $cancion29_opcion2->nombre = "qué bien actuas";
        $cancion29_opcion2->id_cancion = 124;
        $cancion29_opcion2-> save();

        $cancion29_opcion3 = new opcione();
        $cancion29_opcion3->nombre = "no tengo dudas";
        $cancion29_opcion3->id_cancion = 124;
        $cancion29_opcion3-> save();

        $cancion29_opcion4 = new opcione();
        $cancion29_opcion4->nombre = "tu papel";
        $cancion29_opcion4->id_cancion = 124;
        $cancion29_opcion4-> save();

        $cancion30_opcion1 = new opcione();
        $cancion30_opcion1->nombre = "stay";
        $cancion30_opcion1->id_cancion = 125;
        $cancion30_opcion1-> save();

        $cancion30_opcion2 = new opcione();
        $cancion30_opcion2->nombre = "the same thing";
        $cancion30_opcion2->id_cancion = 125;
        $cancion30_opcion2-> save();

        $cancion30_opcion3 = new opcione();
        $cancion30_opcion3->nombre = "nobody else";
        $cancion30_opcion3->id_cancion = 125;
        $cancion30_opcion3-> save();

        $cancion30_opcion4 = new opcione();
        $cancion30_opcion4->nombre = "as good as you";
        $cancion30_opcion4->id_cancion = 125;
        $cancion30_opcion4-> save();

    }
}
