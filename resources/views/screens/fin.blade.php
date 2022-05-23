<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="description" content="Juego divertido de adivinar canciones. Registro">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Pantalla Final</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="{{asset('css/opciones.css')}}" rel="stylesheet" />
<link href="{{asset('css/facil.css')}}" rel="stylesheet" />
 {{-- PROBANDO FUENTES --}}
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Passion+One&family=Press+Start+2P&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Gloria+Hallelujah&display=swap" rel="stylesheet">
{{-- FIN PROBANDO FUENTES --}}
</head>


<body onload="imprimeUsuario();grabarPartida();">
<div class="container-fluid">


    {{-- HEADER --}}  
    <header>
    <div class="row text-center">
    <h1 style="font-size: 6vw;">¡Fin de la partida!</h1>
    <div class="col-12" style="margin-top:5%; text-transform: uppercase;">Enhorabuena <span id="campoJugador"></span></div>
    <div  class="col-12" style="margin-top:1%; text-transform: uppercase;">Has obtenido un total de <span id="campoPuntos"></span> puntos</div>
    </div>
    </header>


    {{-- SECCION PRINCIPAL --}}
    
    <main>
        <div class="row mx-auto" id="columna1"style="margin-bottom:25%;">
            <div class="col-sm-12 text-center">
                <form action="fin" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden"  id="jugador" name="jugador" value="">
                <input type="hidden"  id="puntos" name="puntos" value="">
                <button id="terminar" type="submit" class="btn btn-dark opcion";> TERMINAR PARTIDA</button>
                </form>
                
            </div>  
        </div>
    </main>

{{-- FOOTER
<div class="row text-center mx-auto">
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
<script src="./js/juego.js"></script>
<script src="./js/rutas.js"></script>
</body>
</html>