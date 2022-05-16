const { toLower } = require("lodash");

var jugador;
var fecha;
var modo;


// ESTA PARTE ES DE FUNCIONES QUE GUARDAN Y RECUPERAN DEL LOCALSTORAGE


function guardarModo(string){
if(string=='facil'){
    localStorage.setItem("modo",'facil');
    
}else{
    localStorage.setItem("modo",'dificil');
     }
     window.open("categoria","_self")
}


function guardaUsuario(){
   jugador=document.getElementById("usuario").value;
   localStorage.setItem("jugador",jugador);
   localStorage.setItem("puntos",Number(0));
   let ronda=localStorage.setItem('ronda',Number(1));
}



/**
 * FUNCION PINTA NOMBRE DE USUARIO EN LA PANTALLA DE JUEGO
 */

function imprimeUsuario(){
    var jugador=localStorage.getItem('jugador');
    var puntos=localStorage.getItem('puntos');
    document.getElementById('campoJugador').innerHTML=jugador;
    document.getElementById('campoPuntos').innerHTML=puntos;
} 

/**
 * FUNCION PARA VALIDAR EL MODO DIFICIL
 */

function validacionDificil(){
let correcta = document.getElementById('respuestaCorrecta').value;
let modo = localStorage.getItem('modo');
let categoria = document.getElementById('categoria').value;
let respuesta= document.getElementById('respuesta').value;
let puntos = localStorage.getItem('puntos');
let ronda =localStorage.getItem('ronda');

respuesta = respuesta.toLowerCase();

if (respuesta==correcta){
    alert('¡Respuesta Correcta!');
    suma= Number(puntos)+ 100;
    localStorage.setItem("puntos",suma);
    document.getElementById('campoPuntos').innerHTML=suma;
    
    sumaRonda = Number(ronda)+ 1;
    localStorage.setItem('ronda',sumaRonda);

    window.open(categoria,"_self")

    if(ronda==10){
    suma= Number(puntos)+ 100;
    localStorage.setItem("puntos",suma);
    document.getElementById('campoPuntos').innerHTML=suma;
    alert('El juego ha terminado. Has obtenido '+suma+' puntos')
    window.open("../ranking","_self")
    }
}else{
    alert('Oh...¡Has fallado!');
    sumaRonda = Number(ronda)+ 1;
    localStorage.setItem('ronda',sumaRonda);
    window.open(categoria,"_self")

    if(ronda==10){
        alert('El juego ha terminado. Has obtenido '+puntos+' puntos')
        window.open("../ranking","_self")
        }
}

}


/**
 * FUNCION PARA VALIDAR LA RESPUESTA EN EL JUEGO FÁCIL
 * @param {*} numero 
 */

function validacion(numero){
let correcta = document.getElementById('respuestaCorrecta').value;
let modo = localStorage.getItem('modo');
let categoria = document.getElementById('categoria').value;
let respuesta= '';
let puntos = localStorage.getItem('puntos');
let ronda =localStorage.getItem('ronda');

    
     switch (numero){
        case 1:
         respuesta = document.getElementById('boton1').value;
            break;
        case 2:
         respuesta = document.getElementById('boton2').value;
            break;
        case 3:
         respuesta = document.getElementById('boton3').value;
            break;
        case 4:
         respuesta = document.getElementById('boton4').value;
            break;
    }
    
    respuesta = respuesta.toLowerCase();

        if (respuesta==correcta){
        
            suma= Number(puntos)+ 50;
            localStorage.setItem("puntos",suma);
            document.getElementById('campoPuntos').innerHTML=suma;
            alert('¡Respuesta Correcta!');

            sumaRonda = Number(ronda)+ 1;
            localStorage.setItem('ronda',sumaRonda);

            window.open(categoria,"_self")

            if(ronda==10){
            suma= Number(puntos)+ 50;
            localStorage.setItem("puntos",suma);
            document.getElementById('campoPuntos').innerHTML=suma;
            alert('El juego ha terminado. Has obtenido '+suma+' puntos')
            window.open("../ranking","_self")
            }
        }else{
            alert('Oh...¡Has fallado!');
            sumaRonda = Number(ronda)+ 1;
            localStorage.setItem('ronda',sumaRonda);
            window.open(categoria,"_self")

            if(ronda==10){
                alert('El juego ha terminado. Has obtenido '+puntos+' puntos')
                window.open("../ranking","_self")
                }
        }
    
    
}
