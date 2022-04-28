<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="utf-8">
   <meta name="description" content="Juego divertido de adivinar canciones. Registro">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Ranking</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link href="{{asset('css/info.css')}}" rel="stylesheet" />


</head>

<body>
   <div class="container" >
   
   <header>
      <div class="row text-center mx-auto">
      <h1>Ranking de Honor</h1>
   </div>
   </header>
   <main>
      <div class="row mx-auto">
      <table class="table table-dark table-striped" style="margin-top:12%;">
         <tr>
           <th>Nombre</th>
           <th>Total de Puntos</th>
         </tr>
         @foreach ($partidas as $partida)
         <tr>
            <td>{{$partida -> nombre_usuario}}</td>
         <td>{{ $partida -> puntos}}</td>
         </tr>
        @endforeach</td>
       </table>
      </div>
   </main>

   <footer>
      <div class="row text-center mx-auto" style="margin-top:-7%;">
         <a href="{{route('home')}}">ATRÁS</a>
   </div>
   </footer>
</div>
</body>

</html>