<?php
  $nombre = $_POST["nombre"];
  $email = $_POST["email"];
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Navegar</title>
</head>
<body>
    <div class="content" style="font-size:18px;"> 
        <?php
            echo "<h4>Bienvenido(a):</h4>";
            echo "<p>Nombre: " . $nombre . "</p>";
            echo "<p>Correo electrónico: " . $email . "</p>";
        ?>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Ejercicios disponibles: </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="EjercicioB.html">Ejercicio B</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="EjercicioC.html">Ejercicio C</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="EjercicioD.html">Ejercicio D</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="EjercicioE.html">Ejercicio E</a>
                    </li>
                </ul>
            </div>
        </nav>
        <p></p>

        <a href="EjercicioA.html" class="btn btn-primary">Cerrar sesión</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>