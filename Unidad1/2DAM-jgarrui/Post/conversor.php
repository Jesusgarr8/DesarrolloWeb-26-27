<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



    <form action="resultado.php" method="POST">
        <label for="nombre">Euros:</label><br>
        <input type="number" id="" name="euros" required><br><br>

        <label for="monedas">Monedas:</label><br>
        <select name="monedas" id="">
            <option value="Dolar">USD</option>
            <option value="Libra">GBP</option>
            <option value="Yen">JPY</option>
        </select>

        <select name="tema" id="tema">
            <option value="">Claro</option>
            <option value="">Oscuro</option>
        </select>

        <button type="submit">Enviar datos por POST</button>
    </form>


</body>

</html>