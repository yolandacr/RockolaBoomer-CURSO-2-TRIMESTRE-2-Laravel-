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

   <header>
      <h1>Ranking de Honor</h1>
   </header>
   <main>
     <table class="table table-dark table-striped">
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
   </main>

   <footer>
      <div class="container"><a href="index">ATRÁS</a></div>
   </footer>
</body>

</html>