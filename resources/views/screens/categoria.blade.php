<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="utf-8">
   <meta name="description" content="Juego divertido de adivinar canciones. Registro">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Categorías del juego</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link href="{{asset('css/opciones.css')}}" rel="stylesheet" />
     {{-- PROBANDO FUENTES --}}
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Passion+One&family=Press+Start+2P&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Gloria+Hallelujah&display=swap" rel="stylesheet">
    {{-- FIN PROBANDO FUENTES --}}
</head>


<body>
  <div class="container">
      {{-- HEADER --}}  
      <header>
      <div class="row text-center">
      <div class="col-12">
        <H1>ELIGE UNA CATEGORÍA</H1>
      </div>
      </div>
      </header>
  
  
  {{-- SECCION PRINCIPAL --}}
   
      <main>
          <div class="row" id="columna1">
            <div class="col-sm-6 text-center" style="margin-top:4%;">
              <button type="button" class="btn btn-dark categoria" onclick="pantallaJuego('AÑOS80');">AÑOS 80</button><br>
              <button style="margin-top:4%;"type="button" class="btn btn-dark categoria" onclick="pantallaJuego('AÑOS90');">AÑOS 90</button>
          
          </div>
     
        <div class="col-sm-6 text-center" style="margin-top:4%;">
            <button type="button" class="btn btn-dark categoria" onclick="pantallaJuego('AÑOS2000');">AÑOS 2000</button><br>
            <button style="margin-top:4%;" type="button" class="btn btn-dark categoria" onclick="pantallaJuego('ACTUALIDAD');">ACTUALIDAD</button>
        </div> 
    
  


  </main>

  
  
  
  
  {{-- FOOTER --}}
  <div class="row text-center mx-auto">
    <div class="col-sm-12">
    <footer>
       <button type="button" class="btn btn-primary atras" onclick="atras();">ATRÁS</button>
    </footer>
 </div>
 </div>
  
  </div>
</div>
<script src="js/rutas.js"></script>
  </body>

</html>