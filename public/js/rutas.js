function atras(){
    history.back();
}

function inicio(){
    window.open("index","_self")
}

function login(){
    window.open("login","_self")
}

function registro(){
    window.open("registro","_self")
}

function ranking(){
    window.open("ranking","_self")
}

function info(){
    window.open("info","_self")
}



/**
 * FUNCION AUXILIAR PARA PASAR MEDIANTE INPUR EL MODO ELEGIDO A PHP
 */

function modoPhp(){
    let modoAlmacenado = localStorage.getItem('modo');
    document.getElementById('modo').value=modoAlmacenado;
}