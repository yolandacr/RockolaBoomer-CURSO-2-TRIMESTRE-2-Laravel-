<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Juego divertido de adivinar canciones. Registro">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Formulario de registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{asset('css/registro.css')}}" rel="stylesheet" />


</head>

<body>


    <header>
        <h1 id="titulo">Registro</h1>
    </header>

 
    <main>
        <div class="container" id="formulario">
            <form action="registro" method="POST" name="registro" id="registro">
                @csrf
                <div class="mb-3">
                    <label for="usuario" class="form-label">Usuario:</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="{{old('nombre')}}">
                    {!!$errors->first('nombre','<small>:message</small>')!!}
                </div>

                <div class="mb-3">
                    <label for="pass" class="form-label">Contraseña:</label>
                    <input type="password" class="form-control" name="clave" placeholder="Contraseña" value="{{old('clave')}}">
                    {!!$errors->first('clave','<small>:message</small>')!!}


                </div>

                <button type="submit" class="btn btn-primary" id="boton" name="boton">Registrar</button>

            </form>
            <br><br>

        </div>

    </main>
    <footer>
        <div class="container">
            <p><a href="index">ATRÁS</a></p>
        </div>
    </footer>
    <script>
        var msg = '{{Session::get("alert")}}';
        var exist = '{{Session::has("alert")}}';
        if (exist) {
            alert(msg);
        }
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>