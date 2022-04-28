<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="utf-8">
   <meta name="description" content="Juego divertido de adivinar canciones. Registro">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Modo de Juego</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link href="{{asset('css/categoria.css')}}" rel="stylesheet" />


</head>

<body >

   <header>
      <h1>Elige una Categoría</h1>
      
   </header>
   <main>
      <div class="container">
         <div class="center">
           <button class="btn" onclick="irModo('años80')">
             <svg width="180px" height="60px" viewBox="0 0 180 60" class="border">
               <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
               <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
             </svg>
             <span style= "color:white" >AÑOS 80<br></span>
           </button>
         </div>
       </div>
     

   {{--     {{-- BOTON 2 --}}
     <div class="container" id="a90" disabled="true">
         <div class="center">
           <button class="btn" onclick="guardarCategoria('años90')">
              <span style= "color:white" >AÑOS 90<br><span>-Próximamente-<span></span>
           </button>
         </div>
       </div>
     
       {{-- BOTON 3 --}}
     
     <div class="container" id="a2000" disabled="true">
         <div class="center">
           <button class="btn" onclick="guardarCategoria('años2000')">
           
           <span style= "color:white" >AÑOS 2000<br><span>-Próximamente-<span></span>
           </button>
         </div>
       </div>


       {{-- BOTON 4 --}}
   <div class="container" id="actualidad" disabled="true">
         <div class="center">
           <button class="btn" onclick="guardarCategoria('actualidad')">
             <span style= "color:white" >ACTUALIDAD<br><span>-Próximamente-<span></span>
           </button>
         </div>
       </div>
      
   </main>
   <footer>
    <div class="row text-center mx-auto">
      <div class="col-sm-12">
        <footer>
          <a href="{{route('users.login')}}">ATRÁS</a>
        </footer>
   <script src="js/juego.js"></script>
</body>

</html>