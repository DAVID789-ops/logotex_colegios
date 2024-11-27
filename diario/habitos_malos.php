<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Personal Diario</title>
</head>
<form action="config/config.php" method="post">
    <!-- habitos malos -->
    <h2>Habitos Malos</h2>
    <label for="nombre_malo">Nombre</label>
    <input type="text" id="nombre_malo" name="nombre_malo"><br><br>
    <label for="nombre_descripcion">descripcion</label>
    <input type="textarea" id="nombre_descripcion" name="nombre_descripcion"><br><br>

    <label for="calificaion_malo">Calificacion</label>
    <input type="number" id="calificacion_malo" name="calificacion_malo"><br><br>
    <label for="tiempo_mal">tiempo dedicado</label>
    <input type="number" id="tiempo_mal" name="tiempo_mal"><br><br>

    <input type="submit" value="Registrar">
</form>
</body>
</html>