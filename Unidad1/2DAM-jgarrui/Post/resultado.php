<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>aaaa</h1>
    <?php

    $metodo = $_SERVER['REQUEST_METHOD'];

    if ($metodo === 'POST' && isset($_POST['euros']) && isset($_POST['monedas']) && isset($_POST['tema'])) {
        $euros = ($_POST['euros']);
        $monedas = ($_POST['monedas']);
        $tema = ($_POST['tema']);
        echo "<p>Los datos han sido recibidos mediante el método <strong>POST</strong>.</p>";
        echo "<p> $tema  </p>";

        $importe = $euros;

        if ($euros < 0) {
            echo "<h1>Advertencia, el importe no puede ser negativo</h1>";
        } elseif ($monedas == 'Dolar') {
            $importe = $euros * 1.10;
        } elseif ($monedas == 'Libra') {
            $importe = $euros * 0.85;
        } elseif ($monedas == 'Yen') {
            $importe = $euros * 160;
        }

        echo "<p>Tienes $importe $monedas</p>";
    }

    ?>
</body>

</html>