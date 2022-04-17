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

   <header>
      <h1>Elige un Modo de Juego</h1>
   </header>
   <main>
   


      {{-- BOTON 1 --}}

      <div class="container">
         <div class="center">
           <button class="btn" onclick="location.href='categoria'">
             <svg width="180px" height="60px" viewBox="0 0 180 60" class="border">
               <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
               <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
             </svg>
             <span>FACIL</span>
           </button>
         </div>
       </div><br>


       {{-- BOTON 2 --}}
       <div class="container" id="dificil" disabled="true">
         <div class="center">
           <button class="btn">
             {{-- <svg width="180px" height="60px" viewBox="0 0 180 60" class="border">
               <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
               <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
             </svg> --}}
             <span>DIFICIL<br><span>-Próximamente-<span></span>
           </button>
         </div>
       </div>
    
   </main>
</body>

</html>