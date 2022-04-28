var jugador;
var puntos;
var fecha;
var modo;


function guardarModo(string){
if(string=='facil'){
    localStorage.setItem("modo",'facil');
    window.open("facil","_self")
    
}else{
    localStorage.setItem("modo",'dificil');
    
}
}

function guardaUsuario(){
   jugador=document.getElementById("usuario").value;
   puntos=0;
   localStorage.setItem("jugador",jugador);
   localStorage.setItem("puntos",puntos);
}

function irModo(categoria){
            localStorage.setItem("categoria",categoria);
            window.open("modo","_self")
    }

 function recuperaCategoria(){
  localStorage.getItem('categoria');
 }

function imprimeUsuario(){
    var jugador=localStorage.getItem('jugador');
    var puntos=localStorage.getItem('puntos');
    document.getElementById('campoJugador').innerHTML=jugador;
    document.getElementById('campoPuntos').innerHTML=puntos;
    
    
}

