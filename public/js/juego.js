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
 * FUNCION PARA REPRODUCIR SONIDOS
 * @param {*} origen 
 */


function sonido(origen){
    switch(origen){
        case "acierto":
            const music2 = new Audio('sonidos/acierto.mp3');
                music2.play();
            break;

        case "fallo":
                const music3 = new Audio('sonidos/incorrecto.mp3');
                    music3.play();
                break;
    }

}


/**
 * FUNCION PARA VALIDAR EL MODO DIFICIL
 */

function validacionDificil(){
let correcta = document.getElementById('respuestaCorrecta').value;
let modo = localStorage.getItem('modo');
let respuesta= document.getElementById('respuesta').value;
let puntos = localStorage.getItem('puntos');
let ronda =localStorage.getItem('ronda');

respuesta = respuesta.toLowerCase();

if (respuesta==correcta){
    sonido('acierto');
    suma= Number(puntos)+ 100;
    localStorage.setItem("puntos",suma);
    document.getElementById('campoPuntos').innerHTML=suma;

    setTimeout(function(){
    alert('¡Respuesta Correcta!');
    },30);
  

    sumaRonda = Number(ronda)+ 1;
    localStorage.setItem('ronda',sumaRonda);

    
    window.open("dificil","_self")
        

   

    if(ronda==10){
    suma= Number(puntos)+ 100;
    localStorage.setItem("puntos",suma);
    document.getElementById('campoPuntos').innerHTML=suma;
    window.open("fin","_self")

   
    }
}else{
    sonido('fallo');
    setTimeout(function(){
            alert('Oh...¡Has fallado!');
    },10);

    sumaRonda = Number(ronda)+ 1;
    localStorage.setItem('ronda',sumaRonda);
    window.open("dificil","_self");

    if(ronda==10){
        window.open("fin","_self");
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
            sonido('acierto');
            suma= Number(puntos)+ 50;
            localStorage.setItem("puntos",suma);
            document.getElementById('campoPuntos').innerHTML=suma;

            setTimeout(function(){
                alert('¡Respuesta Correcta!');
            },100);
            

            sumaRonda = Number(ronda)+ 1;
            localStorage.setItem('ronda',sumaRonda);

            window.open("facil","_self")

            

            if(ronda==10){
            suma= Number(puntos)+ 50;
            localStorage.setItem("puntos",suma);
            document.getElementById('campoPuntos').innerHTML=suma;
            window.open("fin","_self")

           
            }
        }else{
            sonido('fallo');
            setTimeout(function(){
                alert('Oh...¡Has fallado!');
            },40);
            
            sumaRonda = Number(ronda)+ 1;
            localStorage.setItem('ronda',sumaRonda);
            window.open("facil","_self");

            if(ronda==10){
                window.open("fin","_self");
                }
        }
    
    
}

/**
 * FUNCION PARA GRABAR PARTIDA
 */

function grabarPartida(){
    let jugador = localStorage.getItem('jugador');
    let puntos = localStorage.getItem('puntos');

    document.getElementById('jugador').value=jugador;
    document.getElementById('puntos').value=puntos;
}




