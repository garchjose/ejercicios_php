<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="../css/ejercicios.css">
</head>
<body>
<h1><?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero_uno = $_POST["numero_uno"];
    $numero_dos = $_POST["numero_dos"];
    $numero_tres = $_POST["numero_tres"];
    
        // Encontrar el número mayor
        if ($numero_uno > $numero_dos && $numero_uno > $numero_tres) {
            echo "El primer número es el mayor: $numero_uno";
        } elseif ($numero_dos > $numero_uno && $numero_dos > $numero_tres) {
            echo "El segundo número es el mayor: $numero_dos";
        } else {
            echo "El tercer número es el mayor: $numero_tres";
        }
    }

?>
</h1>   
</body>
</html>
