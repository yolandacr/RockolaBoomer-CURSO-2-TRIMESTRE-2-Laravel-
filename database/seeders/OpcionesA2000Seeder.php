<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\opcione;
use Illuminate\Support\Facades\DB;

class OpcionesA2000Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // OPCIONES DE LAS 10 PRIMERAS CANCIONES
        $cancion1_opcion1 = new opcione();
        $cancion1_opcion1->nombre = "lamento boliviano";
        $cancion1_opcion1->id_cancion = 33;
        $cancion1_opcion1-> save();

        $cancion1_opcion2 = new opcione();
        $cancion1_opcion2->nombre = "borracho y loco";
        $cancion1_opcion2->id_cancion = 33;
        $cancion1_opcion2-> save();

        $cancion1_opcion3 = new opcione();
        $cancion1_opcion3->nombre = "corazón idiota";
        $cancion1_opcion3->id_cancion = 33;
        $cancion1_opcion3-> save();

        $cancion1_opcion4 = new opcione();
        $cancion1_opcion4->nombre = "estoy aquí";
        $cancion1_opcion4->id_cancion = 33;
        $cancion1_opcion4-> save();

        $cancion2_opcion1 = new opcione();
        $cancion2_opcion1->nombre = "bring me to life";
        $cancion2_opcion1->id_cancion = 34;
        $cancion2_opcion1-> save();

        $cancion2_opcion2 = new opcione();
        $cancion2_opcion2->nombre = "call my name";
        $cancion2_opcion2->id_cancion = 34;
        $cancion2_opcion2-> save();

        $cancion2_opcion3 = new opcione();
        $cancion2_opcion3->nombre = "save me";
        $cancion2_opcion3->id_cancion = 34;
        $cancion2_opcion3-> save();

        $cancion2_opcion4 = new opcione();
        $cancion2_opcion4->nombre = "wake me up";
        $cancion2_opcion4->id_cancion = 34;
        $cancion2_opcion4-> save();

        $cancion3_opcion1 = new opcione();
        $cancion3_opcion1->nombre = "a contracorriente";
        $cancion3_opcion1->id_cancion = 35;
        $cancion3_opcion1-> save();

        $cancion3_opcion2 = new opcione();
        $cancion3_opcion2->nombre = "escuchar tu voz";
        $cancion3_opcion2->id_cancion = 35;
        $cancion3_opcion2-> save();

        $cancion3_opcion3 = new opcione();
        $cancion3_opcion3->nombre = "te busco";
        $cancion3_opcion3->id_cancion = 35;
        $cancion3_opcion3-> save();

        $cancion3_opcion4 = new opcione();
        $cancion3_opcion4->nombre = "volver a sentir";
        $cancion3_opcion4->id_cancion = 35;
        $cancion3_opcion4-> save();

        $cancion4_opcion1 = new opcione();
        $cancion4_opcion1->nombre = "soldadito marinero";
        $cancion4_opcion1->id_cancion = 36;
        $cancion4_opcion1-> save();

        $cancion4_opcion2 = new opcione();
        $cancion4_opcion2->nombre = "la sirena";
        $cancion4_opcion2->id_cancion = 36;
        $cancion4_opcion2-> save();

        $cancion4_opcion3 = new opcione();
        $cancion4_opcion3->nombre = "por la boca muere el pez";
        $cancion4_opcion3->id_cancion = 36;
        $cancion4_opcion3-> save();

        $cancion4_opcion4 = new opcione();
        $cancion4_opcion4->nombre = "guerra y paz";
        $cancion4_opcion4->id_cancion = 36;
        $cancion4_opcion4-> save();

        $cancion5_opcion1 = new opcione();
        $cancion5_opcion1->nombre = "gods & monsters";
        $cancion5_opcion1->id_cancion = 37;
        $cancion5_opcion1-> save();

        $cancion5_opcion2 = new opcione();
        $cancion5_opcion2->nombre = "angel";
        $cancion5_opcion2->id_cancion = 37;
        $cancion5_opcion2-> save();

        $cancion5_opcion3 = new opcione();
        $cancion5_opcion3->nombre = "land of evil";
        $cancion5_opcion3->id_cancion = 37;
        $cancion5_opcion3-> save();

        $cancion5_opcion4 = new opcione();
        $cancion5_opcion4->nombre = "you got that everything";
        $cancion5_opcion4->id_cancion = 37;
        $cancion5_opcion4-> save();

        $cancion6_opcion1 = new opcione();
        $cancion6_opcion1->nombre = "the kill";
        $cancion6_opcion1->id_cancion = 38;
        $cancion6_opcion1-> save();

        $cancion6_opcion2 = new opcione();
        $cancion6_opcion2->nombre = "bury me";
        $cancion6_opcion2->id_cancion = 38;
        $cancion6_opcion2-> save();

        $cancion6_opcion3 = new opcione();
        $cancion6_opcion3->nombre = "finish with you";
        $cancion6_opcion3->id_cancion = 38;
        $cancion6_opcion3-> save();

        $cancion6_opcion4 = new opcione();
        $cancion6_opcion4->nombre = "look in my eyes";
        $cancion6_opcion4->id_cancion = 38;
        $cancion6_opcion4-> save();

        $cancion7_opcion1 = new opcione();
        $cancion7_opcion1->nombre = "fiesta pagana";
        $cancion7_opcion1->id_cancion = 39;
        $cancion7_opcion1-> save();

        $cancion7_opcion2 = new opcione();
        $cancion7_opcion2->nombre = "alza el puño";
        $cancion7_opcion2->id_cancion = 39;
        $cancion7_opcion2-> save();

        $cancion7_opcion3 = new opcione();
        $cancion7_opcion3->nombre = "la hoguera";
        $cancion7_opcion3->id_cancion = 39;
        $cancion7_opcion3-> save();

        $cancion7_opcion4 = new opcione();
        $cancion7_opcion4->nombre = "ponte en pie";
        $cancion7_opcion4->id_cancion = 39;
        $cancion7_opcion4-> save();

        $cancion8_opcion1 = new opcione();
        $cancion8_opcion1->nombre = "hysteria";
        $cancion8_opcion1->id_cancion = 40;
        $cancion8_opcion1-> save();

        $cancion8_opcion2 = new opcione();
        $cancion8_opcion2->nombre = "out of touch";
        $cancion8_opcion2->id_cancion = 40;
        $cancion8_opcion2-> save();

        $cancion8_opcion3 = new opcione();
        $cancion8_opcion3->nombre = "the bitter end";
        $cancion8_opcion3->id_cancion = 40;
        $cancion8_opcion3-> save();

        $cancion8_opcion4 = new opcione();
        $cancion8_opcion4->nombre = "you could hide";
        $cancion8_opcion4->id_cancion = 40;
        $cancion8_opcion4-> save();

        $cancion9_opcion1 = new opcione();
        $cancion9_opcion1->nombre = "yo pienso en aquella tarde";
        $cancion9_opcion1->id_cancion = 41;
        $cancion9_opcion1-> save();

        $cancion9_opcion2 = new opcione();
        $cancion9_opcion2->nombre = "lo daría todo";
        $cancion9_opcion2->id_cancion = 41;
        $cancion9_opcion2-> save();

        $cancion9_opcion3 = new opcione();
        $cancion9_opcion3->nombre = "nostalgia";
        $cancion9_opcion3->id_cancion = 41;
        $cancion9_opcion3-> save();

        $cancion9_opcion4 = new opcione();
        $cancion9_opcion4->nombre = "por estar contigo";
        $cancion9_opcion4->id_cancion = 41;
        $cancion9_opcion4-> save();

        $cancion10_opcion1 = new opcione();
        $cancion10_opcion1->nombre = "torero";
        $cancion10_opcion1->id_cancion = 42;
        $cancion10_opcion1-> save();

        $cancion10_opcion2 = new opcione();
        $cancion10_opcion2->nombre = "alma en el ruedo";
        $cancion10_opcion2->id_cancion = 42;
        $cancion10_opcion2-> save();

        $cancion10_opcion3 = new opcione();
        $cancion10_opcion3->nombre = "salomé";
        $cancion10_opcion3->id_cancion = 42;
        $cancion10_opcion3-> save();

        $cancion10_opcion4 = new opcione();
        $cancion10_opcion4->nombre = "jugándome la vida";
        $cancion10_opcion4->id_cancion = 42;
        $cancion10_opcion4-> save();

        //OPCIONES DE LAS CANCIONES 11 A 52

        $cancion11_opcion1 = new opcione();
        $cancion11_opcion1->nombre = "en el 2000";
        $cancion11_opcion1->id_cancion = 43;
        $cancion11_opcion1-> save();

        $cancion11_opcion2 = new opcione();
        $cancion11_opcion2->nombre = "el planeta";
        $cancion11_opcion2->id_cancion = 43;
        $cancion11_opcion2-> save();

        $cancion11_opcion3 = new opcione();
        $cancion11_opcion3->nombre = "giro a la derecha";
        $cancion11_opcion3->id_cancion = 43;
        $cancion11_opcion3-> save();

        $cancion11_opcion4 = new opcione();
        $cancion11_opcion4->nombre = "ya no soy";
        $cancion11_opcion4->id_cancion = 43;
        $cancion11_opcion4-> save();

        $cancion12_opcion1 = new opcione();
        $cancion12_opcion1->nombre = "all the things she said";
        $cancion12_opcion1->id_cancion = 44;
        $cancion12_opcion1-> save();

        $cancion12_opcion2 = new opcione();
        $cancion12_opcion2->nombre = "i losed my mind";
        $cancion12_opcion2->id_cancion = 44;
        $cancion12_opcion2-> save();
        
        $cancion12_opcion3 = new opcione();
        $cancion12_opcion3->nombre = "running through my head";
        $cancion12_opcion3->id_cancion = 44;
        $cancion12_opcion3-> save();

        $cancion12_opcion4 = new opcione();
        $cancion12_opcion4->nombre = "this is not enough";
        $cancion12_opcion4->id_cancion = 44;
        $cancion12_opcion4-> save();

        $cancion13_opcion1 = new opcione();
        $cancion13_opcion1->nombre = "bésame en la boca";
        $cancion13_opcion1->id_cancion = 45;
        $cancion13_opcion1-> save();

        $cancion13_opcion2 = new opcione();
        $cancion13_opcion2->nombre = "dame tiempo";
        $cancion13_opcion2->id_cancion = 45;
        $cancion13_opcion2-> save();

        $cancion13_opcion3 = new opcione();
        $cancion13_opcion3->nombre = "mi pasatiempo";
        $cancion13_opcion3->id_cancion = 45;
        $cancion13_opcion3-> save();

        $cancion13_opcion4 = new opcione();
        $cancion13_opcion4->nombre = "yo no quiero";
        $cancion13_opcion4->id_cancion = 45;
        $cancion13_opcion4-> save();

        $cancion14_opcion1 = new opcione();
        $cancion14_opcion1->nombre = "cherry lips";
        $cancion14_opcion1->id_cancion = 46;
        $cancion14_opcion1-> save();

        $cancion14_opcion2 = new opcione();
        $cancion14_opcion2->nombre = "delicate boy";
        $cancion14_opcion2->id_cancion = 46;
        $cancion14_opcion2-> save();

        $cancion14_opcion3 = new opcione();
        $cancion14_opcion3->nombre = "go baby";
        $cancion14_opcion3->id_cancion = 46;
        $cancion14_opcion3-> save();

        $cancion14_opcion4 = new opcione();
        $cancion14_opcion4->nombre = "hysterical realm";
        $cancion14_opcion4->id_cancion = 46;
        $cancion14_opcion4-> save();

        $cancion15_opcion1 = new opcione();
        $cancion15_opcion1->nombre = "cuando nadie me ve";
        $cancion15_opcion1->id_cancion = 47;
        $cancion15_opcion1-> save();

        $cancion15_opcion2 = new opcione();
        $cancion15_opcion2->nombre = "a veces me elevo";
        $cancion15_opcion2->id_cancion = 47;
        $cancion15_opcion2-> save();

        $cancion15_opcion3 = new opcione();
        $cancion15_opcion3->nombre = "limita la piel";
        $cancion15_opcion3->id_cancion = 47;
        $cancion15_opcion3-> save();

        $cancion15_opcion4 = new opcione();
        $cancion15_opcion4->nombre = "ser o no ser";
        $cancion15_opcion4->id_cancion = 47;
        $cancion15_opcion4-> save();

        $cancion16_opcion1 = new opcione();
        $cancion16_opcion1->nombre = "cuatro elementos";
        $cancion16_opcion1->id_cancion = 48;
        $cancion16_opcion1-> save();

        $cancion16_opcion2 = new opcione();
        $cancion16_opcion2->nombre = "jamás";
        $cancion16_opcion2->id_cancion = 48;
        $cancion16_opcion2-> save();

        $cancion16_opcion3 = new opcione();
        $cancion16_opcion3->nombre = "decir que no";
        $cancion16_opcion3->id_cancion = 48;
        $cancion16_opcion3-> save();

        $cancion16_opcion4 = new opcione();
        $cancion16_opcion4->nombre = "pedir perdón";
        $cancion16_opcion4->id_cancion = 48;
        $cancion16_opcion4-> save();

        $cancion17_opcion1 = new opcione();
        $cancion17_opcion1->nombre = "dice lo que siente";
        $cancion17_opcion1->id_cancion = 49;
        $cancion17_opcion1-> save();

        $cancion17_opcion2 = new opcione();
        $cancion17_opcion2->nombre = "entre todo la gente";
        $cancion17_opcion2->id_cancion = 49;
        $cancion17_opcion2-> save();

        $cancion17_opcion3 = new opcione();
        $cancion17_opcion3->nombre = "estilo propio";
        $cancion17_opcion3->id_cancion = 49;
        $cancion17_opcion3-> save();

        $cancion17_opcion4 = new opcione();
        $cancion17_opcion4->nombre = "luego lo vi";
        $cancion17_opcion4->id_cancion = 49;
        $cancion17_opcion4-> save();

        $cancion18_opcion1 = new opcione();
        $cancion18_opcion1->nombre = "dulce locura";
        $cancion18_opcion1->id_cancion = 50;
        $cancion18_opcion1-> save();

        $cancion18_opcion2 = new opcione();
        $cancion18_opcion2->nombre = "mi condena";
        $cancion18_opcion2->id_cancion = 50;
        $cancion18_opcion2-> save();

        $cancion18_opcion3 = new opcione();
        $cancion18_opcion3->nombre = "pequeña";
        $cancion18_opcion3->id_cancion = 50;
        $cancion18_opcion3-> save();

        $cancion18_opcion4 = new opcione();
        $cancion18_opcion4->nombre = "sin tu luna";
        $cancion18_opcion4->id_cancion = 50;
        $cancion18_opcion4-> save();

        $cancion19_opcion1 = new opcione();
        $cancion19_opcion1->nombre = "en vela";
        $cancion19_opcion1->id_cancion = 51;
        $cancion19_opcion1-> save();

        $cancion19_opcion2 = new opcione();
        $cancion19_opcion2->nombre = "a tu ventana";
        $cancion19_opcion2->id_cancion = 51;
        $cancion19_opcion2-> save();

        $cancion19_opcion3 = new opcione();
        $cancion19_opcion3->nombre = "pasa las horas";
        $cancion19_opcion3->id_cancion = 51;
        $cancion19_opcion3-> save();

        $cancion19_opcion4 = new opcione();
        $cancion19_opcion4->nombre = "robar la primavera";
        $cancion19_opcion4->id_cancion = 51;
        $cancion19_opcion4-> save();

        $cancion20_opcion1 = new opcione();
        $cancion20_opcion1->nombre = "estoy hecho a pedacitos de ti";
        $cancion20_opcion1->id_cancion = 52;
        $cancion20_opcion1-> save();

        $cancion20_opcion2 = new opcione();
        $cancion20_opcion2->nombre = "a pedacitos";
        $cancion20_opcion2->id_cancion = 52;
        $cancion20_opcion2-> save();

        $cancion20_opcion3 = new opcione();
        $cancion20_opcion3->nombre = "fue el amargo abril";
        $cancion20_opcion3->id_cancion = 52;
        $cancion20_opcion3-> save();

        $cancion20_opcion4 = new opcione();
        $cancion20_opcion4->nombre = "abrazo añil";
        $cancion20_opcion4->id_cancion = 52;
        $cancion20_opcion4-> save();

        //CANCION DE LA 21 A LA 30
        $cancion21_opcion1 = new opcione();
        $cancion21_opcion1->nombre = "i write sins not tragedies";
        $cancion21_opcion1->id_cancion = 53;
        $cancion21_opcion1-> save();

        $cancion21_opcion2 = new opcione();
        $cancion21_opcion2->nombre = "beautiful wedding";
        $cancion21_opcion2->id_cancion = 53;
        $cancion21_opcion2-> save();

        $cancion21_opcion3 = new opcione();
        $cancion21_opcion3->nombre = "cheater";
        $cancion21_opcion3->id_cancion = 53;
        $cancion21_opcion3-> save();

        $cancion21_opcion4 = new opcione();
        $cancion21_opcion4->nombre = "panic at the disco";
        $cancion21_opcion4->id_cancion = 53;
        $cancion21_opcion4-> save();

        $cancion22_opcion1 = new opcione();
        $cancion22_opcion1->nombre = "just like a pill";
        $cancion22_opcion1->id_cancion = 54;
        $cancion22_opcion1-> save();

        $cancion22_opcion2 = new opcione();
        $cancion22_opcion2->nombre = "run";
        $cancion22_opcion2->id_cancion = 54;
        $cancion22_opcion2-> save();

        $cancion22_opcion3 = new opcione();
        $cancion22_opcion3->nombre = "sober";
        $cancion22_opcion3->id_cancion = 54;
        $cancion22_opcion3-> save();

        $cancion22_opcion4 = new opcione();
        $cancion22_opcion4->nombre = "you makin' me ill";
        $cancion22_opcion4->id_cancion = 54;
        $cancion22_opcion4-> save();

        $cancion23_opcion1 = new opcione();
        $cancion23_opcion1->nombre = "labios rotos";
        $cancion23_opcion1->id_cancion = 55;
        $cancion23_opcion1-> save();

        $cancion23_opcion2 = new opcione();
        $cancion23_opcion2->nombre = "cuando menos lo esperas";
        $cancion23_opcion2->id_cancion = 55;
        $cancion23_opcion2-> save();

        $cancion23_opcion3 = new opcione();
        $cancion23_opcion3->nombre = "es raro el amor";
        $cancion23_opcion3->id_cancion = 55;
        $cancion23_opcion3-> save();

        $cancion23_opcion4 = new opcione();
        $cancion23_opcion4->nombre = "regálame tu corazón";
        $cancion23_opcion4->id_cancion = 55;
        $cancion23_opcion4-> save();

        $cancion24_opcion1 = new opcione();
        $cancion24_opcion1->nombre = "mi música es tu voz";
        $cancion24_opcion1->id_cancion = 56;
        $cancion24_opcion1-> save();

        $cancion24_opcion2 = new opcione();
        $cancion24_opcion2->nombre = "a tu lado";
        $cancion24_opcion2->id_cancion = 56;
        $cancion24_opcion2-> save();

        $cancion24_opcion3 = new opcione();
        $cancion24_opcion3->nombre = "no dudo";
        $cancion24_opcion3->id_cancion = 56;
        $cancion24_opcion3-> save();

        $cancion24_opcion4 = new opcione();
        $cancion24_opcion4->nombre = "me siento seguro";
        $cancion24_opcion4->id_cancion = 56;
        $cancion24_opcion4-> save();

        $cancion25_opcion1 = new opcione();
        $cancion25_opcion1->nombre = "microdancing";
        $cancion25_opcion1->id_cancion = 57;
        $cancion25_opcion1-> save();

        $cancion25_opcion2 = new opcione();
        $cancion25_opcion2->nombre = "nada de mí";
        $cancion25_opcion2->id_cancion = 57;
        $cancion25_opcion2-> save();

        $cancion25_opcion3 = new opcione();
        $cancion25_opcion3->nombre = "si te llevo de favor";
        $cancion25_opcion3->id_cancion = 57;
        $cancion25_opcion3-> save();

        $cancion25_opcion4 = new opcione();
        $cancion25_opcion4->nombre = "arruinar la fiesta";
        $cancion25_opcion4->id_cancion = 57;
        $cancion25_opcion4-> save();

        $cancion26_opcion1 = new opcione();
        $cancion26_opcion1->nombre = "quiéreme otra vez";
        $cancion26_opcion1->id_cancion = 58;
        $cancion26_opcion1-> save();

        $cancion26_opcion2 = new opcione();
        $cancion26_opcion2->nombre = "babylon";
        $cancion26_opcion2->id_cancion = 58;
        $cancion26_opcion2-> save();

        $cancion26_opcion3 = new opcione();
        $cancion26_opcion3->nombre = "no sé qué hacer";
        $cancion26_opcion3->id_cancion = 58;
        $cancion26_opcion3-> save();

        $cancion26_opcion4 = new opcione();
        $cancion26_opcion4->nombre = "sálvame";
        $cancion26_opcion4->id_cancion = 58;
        $cancion26_opcion4-> save();

        $cancion27_opcion1 = new opcione();
        $cancion27_opcion1->nombre = "retorciendo palabras";
        $cancion27_opcion1->id_cancion = 59;
        $cancion27_opcion1-> save();

        $cancion27_opcion2 = new opcione();
        $cancion27_opcion2->nombre = "lo que yo no me atrevo";
        $cancion27_opcion2->id_cancion = 59;
        $cancion27_opcion2-> save();

        $cancion27_opcion3 = new opcione();
        $cancion27_opcion3->nombre = "atacándote así";
        $cancion27_opcion3->id_cancion = 59;
        $cancion27_opcion3-> save();

        $cancion27_opcion4 = new opcione();
        $cancion27_opcion4->nombre = "no durarán";
        $cancion27_opcion4->id_cancion = 59;
        $cancion27_opcion4-> save();

        $cancion28_opcion1 = new opcione();
        $cancion28_opcion1->nombre = "si no estás";
        $cancion28_opcion1->id_cancion = 60;
        $cancion28_opcion1-> save();

        $cancion28_opcion2 = new opcione();
        $cancion28_opcion2->nombre = "llegará el otoño";
        $cancion28_opcion2->id_cancion = 60;
        $cancion28_opcion2-> save();

        $cancion28_opcion3 = new opcione();
        $cancion28_opcion3->nombre = "si te vas";
        $cancion28_opcion3->id_cancion = 60;
        $cancion28_opcion3-> save();

        $cancion28_opcion4 = new opcione();
        $cancion28_opcion4->nombre = "sola";
        $cancion28_opcion4->id_cancion = 60;
        $cancion28_opcion4-> save();

        $cancion29_opcion1 = new opcione();
        $cancion29_opcion1->nombre = "si tú te vas";
        $cancion29_opcion1->id_cancion = 61;
        $cancion29_opcion1-> save();

        $cancion29_opcion2 = new opcione();
        $cancion29_opcion2->nombre = "la herida";
        $cancion29_opcion2->id_cancion = 61;
        $cancion29_opcion2-> save();

        $cancion29_opcion3 = new opcione();
        $cancion29_opcion3->nombre = "un beso más";
        $cancion29_opcion3->id_cancion = 61;
        $cancion29_opcion3-> save();

        $cancion29_opcion4 = new opcione();
        $cancion29_opcion4->nombre = "no digas que no";
        $cancion29_opcion4->id_cancion = 61;
        $cancion29_opcion4-> save();

        $cancion30_opcion1 = new opcione();
        $cancion30_opcion1->nombre = "te comeré a besos";
        $cancion30_opcion1->id_cancion = 62;
        $cancion30_opcion1-> save();

        $cancion30_opcion2 = new opcione();
        $cancion30_opcion2->nombre = "eres para mí";
        $cancion30_opcion2->id_cancion = 62;
        $cancion30_opcion2-> save();

        $cancion30_opcion3 = new opcione();
        $cancion30_opcion3->nombre = "loca por ti";
        $cancion30_opcion3->id_cancion = 62;
        $cancion30_opcion3-> save();

        $cancion30_opcion4 = new opcione();
        $cancion30_opcion4->nombre = "obsesión";
        $cancion30_opcion4->id_cancion = 62;
        $cancion30_opcion4-> save();


        //CANCIONES DE LA 31  EN ADELANTE
        $cancion31_opcion1 = new opcione();
        $cancion31_opcion1->nombre = "i wanna be";
        $cancion31_opcion1->id_cancion = 63;
        $cancion31_opcion1-> save();

        $cancion31_opcion2 = new opcione();
        $cancion31_opcion2->nombre = "teen idle";
        $cancion31_opcion2->id_cancion = 63;
        $cancion31_opcion2-> save();

        $cancion31_opcion3 = new opcione();
        $cancion31_opcion3->nombre = "wasted years";
        $cancion31_opcion3->id_cancion = 63;
        $cancion31_opcion3-> save();

        $cancion31_opcion4 = new opcione();
        $cancion31_opcion4->nombre = "wasted youth";
        $cancion31_opcion4->id_cancion = 63;
        $cancion31_opcion4-> save();

        $cancion32_opcion1 = new opcione();
        $cancion32_opcion1->nombre = "use somebody";
        $cancion32_opcion1->id_cancion = 64;
        $cancion32_opcion1-> save();

        $cancion32_opcion2 = new opcione();
        $cancion32_opcion2->nombre = "like you";
        $cancion32_opcion2->id_cancion = 64;
        $cancion32_opcion2-> save();

        $cancion32_opcion3 = new opcione();
        $cancion32_opcion3->nombre = "on my way";
        $cancion32_opcion3->id_cancion = 64;
        $cancion32_opcion3-> save();

        $cancion32_opcion4 = new opcione();
        $cancion32_opcion4->nombre = "whole world";
        $cancion32_opcion4->id_cancion = 64;
        $cancion32_opcion4-> save();

        $cancion32_opcion1 = new opcione();
        $cancion32_opcion1->nombre = "whore";
        $cancion32_opcion1->id_cancion = 65;
        $cancion32_opcion1-> save();

        $cancion32_opcion2 = new opcione();
        $cancion32_opcion2->nombre = "i can be";
        $cancion32_opcion2->id_cancion = 65;
        $cancion32_opcion2-> save();

        $cancion32_opcion3 = new opcione();
        $cancion32_opcion3->nombre = "the answer";
        $cancion32_opcion3->id_cancion = 65;
        $cancion32_opcion3-> save();

        $cancion32_opcion4 = new opcione();
        $cancion32_opcion4->nombre = "your everything";
        $cancion32_opcion4->id_cancion = 65;
        $cancion32_opcion4-> save();
    }
}