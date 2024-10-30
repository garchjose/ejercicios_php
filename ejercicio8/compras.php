<?php
session_start();

// Verificar si ya existe la lista de productos en la sesión
if (!isset($_SESSION['lista_compras'])) {
    $_SESSION['lista_compras'] = [];
}

// Agregar producto si se envió desde el formulario
if (isset($_POST['producto']) && !empty($_POST['producto'])) {
    $producto = htmlspecialchars(trim($_POST['producto']));
    $_SESSION['lista_compras'][] = $producto;
}

// Mostrar la lista de productos
if (isset($_POST['finalizar'])) {
    // Mostrar el HTML solo una vez
    echo "<!DOCTYPE html>
    <html lang='es'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Lista de Compras Finalizada</title>
        <link rel='preconnect' href='https://fonts.googleapis.com'>
        <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
        <link href='https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap' rel='stylesheet'>
        <link rel='stylesheet' href='../css/style.css'> 
    </head>
    <body>
        <div>
            <h1>Lista de Compras Finalizada</h1>
            <table>
                <thead>
                    <tr>
                        <th>Producto</th>
                    </tr>
                </thead>
                <tbody>";

    foreach ($_SESSION['lista_compras'] as $item) {
        echo "<tr><td>" . htmlspecialchars($item) . "</td></tr>";
    }

    echo "      </tbody>
            </table>
        </div>
    </body>
    </html>";

    // Limpiar la sesión para la próxima vez
    session_destroy();
} else {
    // Redirigir de vuelta al formulario
    header('Location: compras.html'); // Asegúrate de que el archivo sea 'compras.html'
    exit;
}
?>