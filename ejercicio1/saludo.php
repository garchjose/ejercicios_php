<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="../css/ejercicios.css">
</head>
<body>
<h1><?php

if($_SERVER["REQUEST_METHOD"]=="POST"){


$nombre = $_POST['nombre'];
$primer_apellido = $_POST['primer_apellido'];
$segundo_apellido = $_POST['segundo_apellido'];

echo '¡Hola ' . $nombre . ' ' . $primer_apellido . ' ' . $segundo_apellido . '!';
}
?>
</h1>   
</body>
</html>





