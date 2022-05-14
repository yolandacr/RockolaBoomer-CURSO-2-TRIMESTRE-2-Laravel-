<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="utf-8">
   <meta name="description" content="Juego divertido de adivinar canciones. Registro">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <title>+ Información</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link href="{{asset('css/info.css')}}" rel="stylesheet" />

   {{-- PROBANDO FUENTES --}}
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Passion+One&family=Press+Start+2P&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Gloria+Hallelujah&display=swap" rel="stylesheet">
  {{-- FIN PROBANDO FUENTES --}}


</head>

<body>
   <div class="container mx-auto" >
  <div class="row text-center mx-auto">
     <div class="col-sm-12">
      <header>
         <h1>+ INFO</h1>
      </header>
     </div>
   
  </div>
   

  
   <main>
      <div class="row mx-auto"  id="principal">
      <div class="col-sm-3 " style="margin-top:5%;">
         <img class="img-fluid" src="img/curriculum.png" alt="Yolanda Cordero Robledo">
      </div>
      <div class="col-sm-6 mx-auto" id="texto">
         ¡Hola a todos! Mi nombre es Yolanda Cordero Robledo y soy la creadora de este juego/web, Rockola Boomer, que ha surgido
         como resultado de mi proyecto final del ciclo formativo en Desarrollo de Aplicaciones Web del curso 2021-2022.<br>

         Su creación y utilización está dirigida a fines didácticos, siendo esta totalmente
         gratuita y sin recibir remuneración alguna por ello.<br>

         ¡Espero que disfrutéis del juego tanto como yo lo he hecho programándolo!
      </div>
   </div>
   </main>





<div class="row text-center mx-auto">
   <div class="col-sm-12">
   <footer>
      <button type="button" class="btn btn-primary" onclick="atras();">ATRÁS</button>
   </footer>
</div>
</div>
</div>
<script src="js/rutas.js"></script>
</body>

</html>