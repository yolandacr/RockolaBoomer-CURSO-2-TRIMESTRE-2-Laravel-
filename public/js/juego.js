var jugador;
var puntos;
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
   puntos=0;
   localStorage.setItem("jugador",jugador);
   localStorage.setItem("puntos",puntos);
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
