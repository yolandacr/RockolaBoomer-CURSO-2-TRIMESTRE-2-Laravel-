<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="utf-8">
   <meta name="description" content="Juego divertido de adivinar canciones. Registro">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Categorías del juego</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link href="{{asset('css/categoria.css')}}" rel="stylesheet" />
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
        
          <div class="row mx-auto" id="columna1">
            <div class="col-sm-6" style="margin-top:4%;">

            <form action="dificil" method="get">
              <input type="hidden" placeholder="años80" value="años80" id="años80" name="categoria">
              <button type="submit" class="btn btn-outline-danger">AÑOS 80</button>
            </form>
            
          
            <form action="dificil" method="get" style="margin-top:4%;">
              <input type="hidden" placeholder="años90" value="años90" id="años90" name="categoria">
              <button type="submit" class="btn btn-outline-danger">AÑOS 90</button>
            </form>
          </div>
     
        <div class="col-sm-6 " style="margin-top:4%;">
          <form action="dificil" method="get">
            <input type="hidden" placeholder="años2000" value="años2000" id="años2000" name="categoria">
            <button type="submit" class="btn btn-outline-danger">AÑOS 2000</button>
          </form>
      
          <form action="dificil" method="get" style="margin-top:5%;">
            <input type="hidden" placeholder="actualidad" value="actualidad" id="actualidad" name="categoria">
            <button type="submit" class="btn btn-outline-danger">AÑOS 80</button>
          </form>
      </div> 
    
  


  </main>

  
  
  
  
  {{-- FOOTER --}}
  <div class="row text-center mx-auto" id="filaFooter" style="margin-top:10%;">
  <div class="col-sm-12">
  <footer>
  <p><a href="{{route('screens.modo')}}">ATRÁS</a></p>
  </footer>
  </div>
  </div>
  
  </div>
</div>
  </body>

</html>