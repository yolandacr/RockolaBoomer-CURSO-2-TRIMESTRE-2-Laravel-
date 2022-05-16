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

function pantallaJuego(categoria){
    let modo=localStorage.getItem('modo');

    if(modo=='facil'){
        window.open('facil/'+categoria,'_self')
    }else{
        window.open('dificil/'+categoria,'_self')
    }

}