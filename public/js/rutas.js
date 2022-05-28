/**
 * FUNCIÓN PARA I A LA PÁGINA ANTERIOS
 */
function atras(){
    history.back();
}

/**
 * FUNCIÓN PARA IR A LA PÁGINA DE INICIO
 */

function inicio(){
    window.open("index","_self")
}

/**
 * FUNCIÓN PARA IR A LA PÁGINA DE LOGIN
 */
function login(){
    window.open("login","_self")
}

/**
 * FUNCIÓN PARA IR A LA PÁGINA DE REGISTRO
 */

function registro(){
    window.open("registro","_self")
}

/**
 * FUNCIÓN PARA IR A LA PÁGINA DE RANKING
 */
function ranking(){
    window.open("ranking","_self")
}

/**
 * FUNCIÓN PARA IR A LA PÁGINA DE +INFO.
 */

function info(){
    window.open("info","_self")
}

/**
 * FUNCION AUXILIAR PARA PASAR MEDIANTE INPUT EL MODO ELEGIDO A PHP
 */

function modoPhp(){
    let modoAlmacenado=localStorage.getItem('modo');
    const inputsModo = document.getElementsByClassName("modo");
    for (let i = 0; i < inputsModo.length; i++) {
        inputsModo[i].value = modoAlmacenado;
        }
}