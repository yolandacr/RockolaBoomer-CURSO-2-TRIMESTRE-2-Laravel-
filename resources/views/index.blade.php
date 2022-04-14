<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Juego divertido de adivinar canciones">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Este código creará una cookie en la computadora del usuario que visite nuestra página web y acepte términos -->
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-MWRMSTZ');
  </script>
  <!-- End Google Tag Manager -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../resources/css/main.css" />
  <title>Home</title>
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MWRMSTZ" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->


  <header>
    <!-- REPRODUCTOR MUSICA -->


    <audio controls>
      <source src="../resources/music/intro.mp3" type="audio/mpeg">
      <source src="../resources/music/intro.wav" type="audio/wav">
      Tu navegador no es compatible con el audio de la web
    </audio>

  </header>



  <main class="mainHome">
    <!-- PARTE ESCRITA Y LETRAS -->

    <p id="pPrincipal">
      <span id="sPrincipal">
        Rockola Boomer
      </span>

    </p>

    <!-- BOTONES -->
    <div class="container">
      <p><button type="button" class="btn btn-dark" href="User/login">LOGIN</button></p>
      <p><button type="button" class="btn btn-dark"><a href="usuarios/create">REGISTRO</a></button></p>
      <p> <button type="button" class="btn btn-dark" href="ranking">RANKING</button></p>
      <p><button type="button" class="btn btn-dark"><a href="info">+ INFO</a></button></p>
    </div>


    <!-- VENTANA MODAL Y COOKIES -->
    <div class="aviso-cookies" id="aviso-cookies">
      <img class="galleta" src="../resources/img/cookie.svg" alt="Galleta">
      <h3 class="titulo">Cookies</h3>
      <p class="parrafo">Utilizamos cookies propias y de terceros para mejorar nuestros servicios.</p>
      <button class="boton" id="btn-aceptar-cookies">De acuerdo</button>
      <!-- <a class="enlace" href="cookies.blade.php">Aviso de Cookies</a> -->
      <a class="enlace" href="cookies">Aviso de Cookies</a>
    </div>

    <!-- fondo para que no se interactue con lo ue ha detras. Ventana Modal cookies-->
    <div class="fondo-aviso-cookies" id="fondo-aviso-cookies"></div>




    <script src="../resources/js/aviso-cookies.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>