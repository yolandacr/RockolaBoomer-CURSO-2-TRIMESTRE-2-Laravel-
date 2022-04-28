<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="utf-8">
   <meta name="description" content="Juego divertido de adivinar canciones. Registro">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Modo de Juego</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link href="{{asset('css/opciones.css')}}" rel="stylesheet" />


</head>

<body>
  <div class="container">
   <header>
    <div class="row text-center mx-auto">
      <div class="col-sm-12">
      <h1>Elige un Modo de Juego</h1>
    </div>
  </div>
   </header>
   <main>
   


      {{-- BOTON 1 --}}

      <div class="row text-center">
        <div class="col-sm-12">
        <button type="button" class="btn btn-dark" id="facil"><a href="facil" onclick="guardarModo('facil')">Fácil</a></button>
        </div>  </div>


       {{-- BOTON 2 --}}
       
       <div class="row text-center">
        <div class="col-sm-12">
        <button type="button" class="btn btn-dark" disabled="true" id="dificil" onclick="guardarModo('dificil')">Difícil<br>-Próximamente-</button>
      </div></div>
    
   </main>
   <footer>
    <div class="row text-center mx-auto">
      <div class="col-sm-12">
        <footer>
          <a href="{{route('screens.categoria')}}">ATRÁS</a>
        </footer>
     </div>
    </div>
   </footer>
  </div>

  <script src="js/juego.js"></script>
</body>

</html>