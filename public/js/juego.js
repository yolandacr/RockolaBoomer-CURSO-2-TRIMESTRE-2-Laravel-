var jugador;
var fecha;
var modo;


// ESTA PARTE ES DE FUNCIONES QUE GUARDAN Y RECUPERAN DEL LOCALSTORAGE


function guardarModo(string){
if(string=='facil'){
    localStorage.setItem("modo",'facil');
    window.open("categoria","_self")
    
}else{
    localStorage.setItem("modo",'dificil');
    window.open("categoriaDificil","_self")
     }
}


function guardaUsuario(){
   jugador=document.getElementById("usuario").value;
   localStorage.setItem("jugador",jugador);
   localStorage.setItem("puntos",Number(0));
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

function validacion(numero){
let correcta = document.getElementById('respuestaCorrecta').value;
let modo = localStorage.getItem('modo');
let categoria = document.getElementById('categoria').value;
let respuesta= '';
let puntos = localStorage.getItem('puntos');



if(modo=="facil"){
    
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



    if (respuesta==correcta){
        
        suma= Number(puntos)+ 50;
        localStorage.setItem("puntos",suma);
        document.getElementById('campoPuntos').innerHTML=suma;
        alert('¡Respuesta Correcta!');
        window.open("facil?categoria='"+categoria+"'","_self")
    }else{
        alert('Oh...¡Has fallado!');
        window.open("facil?categoria='"+categoria+"'","_self")
    }

}else{
    
    if(respuesta==correcta){
        puntos= puntos+100;
        localStorage.setItem("puntos",puntos);
        document.getElementById('campoPuntos').innerHTML=puntos;
        alert('¡Respuesta Correcta!');
    }else{
        alert('Oh...¡Has fallado!');
    }
}

    

    
    
}