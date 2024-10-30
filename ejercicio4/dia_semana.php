<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="../css/ejercicios.css">
</head>
<body>
<h1>
<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){


$dia = $_POST['dia'];

switch($dia){
    case 1;
        echo 'Lunes';
        break;
    case 2;
        echo 'Martes';
        break;
    case 3:
        echo 'Miercoles';
        break;
    case 4;
        echo 'Jueves';
        break;
    case 5;
        echo 'Viernes';
        break;
    case 6:
        echo 'Sabado';
        break;
    case 7:
        echo 'Domingo';
        break;
    default:
        echo 'El dia no esta en rango';
}
}
?>
</h1>   
</body>
</html>
