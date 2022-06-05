<?php
	$conectar = mysqli_connect("localhost","root","");
    if(!$conectar)
    {
        echo"Error al conectar con la base de datos";
    }
	
	$email = $_POST['email'];
	$nombre = $_POST['nombre'];
	$password = $_POST['contrasena'];

    $datab="paginaweb";
    $db=mysqli_select_db($conectar,$datab);

    if(!$db){
        echo"Hubo un error";
    }
    else{
        echo"Conectado a Pagina Web";
        }
	
    $sql="INSERT INTO usuarios (email,nombre,password)
     VALUES('$email','$nombre','$password')";

    $ejecutar=mysqli_query($conectar,$sql);

    if(!$ejecutar){
        echo"Hubo un error";
    }
    else{
        echo"Registro exitoso";
        }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página web Arturo Cruz</title>
    <style type="text/css">
        body{
            background-color: rgb(0, 0, 0);
        }
    </style>
    <link rel="shortcut icon" href="img/f1.png" type="image/x-icon">
    <link rel="stylesheet" href="css/Estilos.css">
    <link rel="stylesheet" href="css/vid.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:ital@1&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<video autoplay muted preload="auto" loop>
    <source src="img/logi.mp4" type="video/mp4"> 
</video>

<div class="overlay"></div>
          <div class="absolute">
          <section class="form-login">
            <h5><i class="fa-solid fa-caret-right"></i> Gracias por registrarte</h5>
            <label for="file"> Proceso completado:</label>
            <progress id="file" max="100" value="100"> 100% </progress>
            <a class="boton" href="Index.html" target="_blank"><i class="fa-solid fa-caret-right"></i> Volver</a>
            <h6> Si es posible, compartenos alguna foto para nuestra galeria</h5>
          </form>
          <div>
          <div class="drop-area">
              <h2>Arrastra y suelta imagenes</h2>
              <span>O</span>
              <button>Selecciona tus archivos</button>
              <input type="file" name="" id="input-file" hidden multiple>
          </div>
          <div id="preview"></div>    
          
          </div>

          <script src="index.js" type="module"></script>
          
          </section>
          </div>   

        
          
</body>

</html>