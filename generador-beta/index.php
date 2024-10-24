<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de Ficha Técnica</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

</head>
<body>
    <header>
        <h1>Generador de Fichas Técnicas</h1>
    </header>

    <!-- Formulario para seleccionar el ID de la ficha técnica -->
    <main>
        <form action="procesar.php" method="POST">
            <label for="idFicha">Ingrese el ID de la Ficha Técnica:</label>
            <input type="text" id="idFicha" name="idFicha" required>
            <button type="submit">Generar Ficha</button>
        </form>
    </main>

    <footer>
        <p>Desarrollado por [Juan Barrera]</p>
    </footer>
</body>
</html>
