<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="../css/ejercicios.css">
</head>
<body>
<h1>
<?php
// Diseña un formulario que pida al usuario un número N. 
// Al enviar el formulario, el programa debe calcular y mostrar la suma de todos los números desde 1 hasta N.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST['numero'];
    $suma = 0;
    
    for ($i = 1; $i <= $numero; $i++) {
        $suma += $i; 
    }
    echo 'La suma total es de ' . $suma; 
}
?>
</h1>   
</body>
</html>