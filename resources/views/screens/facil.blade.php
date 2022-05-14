<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="description" content="Juego divertido de adivinar canciones. Registro">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Partida Fácil</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="{{asset('css/registro.css')}}" rel="stylesheet" />
<link href="{{asset('css/facil.css')}}" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>


<body onload="imprimeUsuario()">
<div class="container-fluid">


    {{-- HEADER --}}  
    <header>
    <div class="row text-center" style="background-color:#090d00;padding:0.2%; margin-top:-0.1%;">
    <div class="col">JUGADOR: <span id="campoJugador"></span>
    </div>
    <div class="col">
    <audio controls>
    <input type="hidden" value="{{ $cancionActual -> nombre }}" id="respuestaCorrecta">
    <source src="{{ $cancionActual -> ruta }}" type="audio/wav">
    Tu navegador no es compatible con el audio de la web
    </audio>
    </div> 
    <div class="col">PUNTOS: <span id="campoPuntos" value=0></span>
    </div>
    </div>
    </header>


    {{-- SECCION PRINCIPAL --}}
    
    <main style="margin-top:15%;">
       <input type="hidden" value="{{$cancionActual -> categoria}}" id="categoria">
        <div class="row mx-auto" id="columna1">
            <div class="col-sm-6 text-center">
                <button id="boton1" type="button" class="btn btn-outline-danger" value="{{$opciones[0] -> nombre}}" onclick="validacion(1)">{{$opciones[0] -> nombre}}</button><br>
                <button id="boton2" type="button" class="btn btn-outline-danger derecha"  value="{{$opciones[1] -> nombre}}" onclick="validacion(2)">{{$opciones[1] -> nombre}}</button>
   
            </div> 

            <div class="col-sm-6 text-center">
                <button id="boton3" type="button" class="btn btn-outline-danger" onclick="validacion(3)" value="{{$opciones[2] -> nombre}}" >{{$opciones[2] -> nombre}}</button><br>
                <button id="boton4" type="button" class="btn btn-outline-danger derecha" onclick="validacion(4)" value="{{$opciones[3] -> nombre}}">{{$opciones[3] -> nombre}}</button>
   
            </div>  
        </div>
    </main>

{{-- FOOTER --}}
<div class="row text-center mx-auto">
    <div class="col-sm-12">
    <footer>
       <button type="button" class="btn btn-primary" onclick="atras();">ATRÁS</button>
    </footer>
 </div>
 </div>

{{-- PARTE SCRIPTS --}}
<script src="js/juego.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
</div>
</body>
</html>