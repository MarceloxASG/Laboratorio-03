<?php
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    $numero3 = $_POST["numero3"];
    $numero4 = $_POST["numero4"];
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Resultado</title>
</head>
<body>
    <div class="content" style="font-size:18px;">
        
        <?php
            $suma = $numero1 + $numero2;
            $producto = $numero3 * $numero4;


            echo "<h2>Resultado</h2>";
            echo "La suma de los dos primeros números es: " . $suma . "<br>";
            echo "El producto del tercer y cuarto número es: " . $producto;
        ?>

        <p></p>

        <button href="#" onclick="window.history.back()" class="btn btn-primary">Realizar otro calculo</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
