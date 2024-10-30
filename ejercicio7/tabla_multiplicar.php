<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="../css/ejercicios.css">
</head>
<body>
<h1>
<?php
// Crea un formulario que solicite al usuario un número entre 1 y 10. 
// Al enviar el formulario, el programa debe mostrar la tabla de multiplicar de ese número.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tabla = $_POST['tabla'];
    $multiplicacion = 1;
        // Mostramos la tabla de multiplicar
        while ($multiplicacion < 11) {
            $resultado = $tabla * $multiplicacion;
            echo $tabla . ' x ' . $multiplicacion . ' = ' . $resultado . '<br>';
            $multiplicacion++; // Incrementamos el multiplicador
        } 
}
?>
</h1>   
</body>
</html>

