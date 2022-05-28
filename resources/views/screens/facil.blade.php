<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="description" content="Juego divertido de adivinar canciones. Registro">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Partida Fácil</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.17/dist/sweetalert2.min.css" rel="stylesheet"/>
<link href="{{asset('css/opciones.css')}}" rel="stylesheet" />
<link href="{{asset('css/facil.css')}}" rel="stylesheet" />
 {{-- PROBANDO FUENTES --}}
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Passion+One&family=Press+Start+2P&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Gloria+Hallelujah&display=swap" rel="stylesheet">
{{-- FIN PROBANDO FUENTES --}}
</head>


<body onload="imprimeUsuario()">
<div class="container-fluid">


    {{-- HEADER --}}  
    <header>
    <div class="row text-center" style="background-color:#090d00;padding-top:1%; margin-top:-5%;">
    <div class="col-4">JUGADOR: <span id="campoJugador"></span>
    </div>
    <div class="col-4">
    <audio controls style="height:3vh;width:30vw;">
    <input type="hidden" value="{{ $cancionActual -> nombre }}" id="respuestaCorrecta">
    <source src="{{$cancionActual ->ruta}}" type="audio/wav">
    Tu navegador no es compatible con el audio de la web
    </audio>
    </div> 
    <div class="col-4">PUNTOS: <span id="campoPuntos" value=0></span>
    </div>
    </div>
    </header>


    {{-- SECCION PRINCIPAL --}}
    
    <main style="margin-top:13%;">
       <input type="hidden" value="{{$cancionActual -> categoria}}" id="categoria">
        <div class="row mx-auto" id="columna1">
            <div class="col-sm-6 text-center">
                <button id="boton1" type="button" class="btn btn-dark boton opcion" value="{{$opciones[0] -> nombre}}" onclick="validacion(1)">{{$opciones[0] -> nombre}}</button><br>
                <button id="boton2" type="button" class="btn btn-dark boton opcion derecha"  value="{{$opciones[1] -> nombre}}" onclick="validacion(2)">{{$opciones[1] -> nombre}}</button>
   
            </div> 

            <div class="col-sm-6 text-center">
                <button id="boton3" type="button" class="btn btn-dark opcion" onclick="validacion(3)" value="{{$opciones[2] -> nombre}}" >{{$opciones[2] -> nombre}}</button><br>
                <button id="boton4" type="button" class="btn btn-dark opcion derecha" onclick="validacion(4)" value="{{$opciones[3] -> nombre}}">{{$opciones[3] -> nombre}}</button>
   
            </div>  
        </div>
    </main>

{{-- FOOTER --}}
{{-- <div class="row text-center mx-auto">
    <div class="col-sm-12">
    <footer>
       <button type="button" class="btn btn-primary atras" onclick="atras();">ATRÁS</button>
    </footer>
 </div>
 </div> --}}

{{-- PARTE SCRIPTS --}}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
</div>
<script src="js/juego.js"></script>
<script src="js/rutas.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>