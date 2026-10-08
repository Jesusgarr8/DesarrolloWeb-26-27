<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Procesamiento de Datos</h1>

    <?php
    
    $metodo = $_SERVER['REQUEST_METHOD'];

    if ($metodo === 'GET' && isset($_GET['nombre']) && isset($_GET['apellido'])) {
        $nombre = htmlspecialchars($_GET['nombre']);
        $apellido = htmlspecialchars($_GET['apellido']);
         
        echo "<p>Los datos han sido recibidos mediante el método <strong>GET</strong>.</p>";
        echo "<h2>Hola, $nombre $apellido</h2>";
    }
    ?>
</body>

</html>