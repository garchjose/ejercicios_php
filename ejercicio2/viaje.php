<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="../css/ejercicios.css">
</head>
<body>
<h1><?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $distancia = $_POST["distancia"];
        $velocidad = $_POST["velocidad"];
        
        // Calculo del tiempo
            $tiempo = $distancia / $velocidad;
            echo 'El tiempo que del viaje es de ' . round($tiempo, 2) . ' horas.';
        } 
?>
</h1>   
</body>
</html>
