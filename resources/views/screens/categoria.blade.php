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

            <form action="facil" method="get">
              <input type="hidden" placeholder="años80" value="años80" id="años80" name="categoria">
              <button type="submit" class="btn btn-dark modo">AÑOS 80</button>
            </form>
            
          
            <form action="facil" method="get" style="margin-top:5%;">
              <input type="hidden" placeholder="años90" value="años90" id="años90" name="categoria">
              <button type="submit" class="btn btn-dark modo">AÑOS 90</button>
            </form>
          </div>
     
        <div class="col-sm-6 text-center" style="margin-top:4%;">
          <form action="facil" method="get">
            <input type="hidden" placeholder="años2000" value="años2000" id="años2000" name="categoria">
            <button type="submit" class="btn btn-dark modo">AÑOS 2000</button>
          </form>
      
          <form action="facil" method="get" style="margin-top:5%;">
            <input type="hidden" placeholder="actualidad" value="actualidad" id="actualidad" name="categoria">
            <button type="submit" class="btn btn-dark modo">ACTUALIDAD</button>
          </form>
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