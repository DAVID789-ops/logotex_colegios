<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Personal Diario</title>
</head>
<form action="config/config.php" method="post">
    <!-- Enemigos -->
    <h2>Enemigos</h2>
    <label for="nombre_proyecto">Nombre del enemigo</label>
    <input type="text" id="nombre_enemigo" name="nombre_enemigo"><br><br>
    <label for="sexo">sexo</label>
    <select id="sexo" name="sexo">
            <option value="mujer">mujer</option>
            <option value="hombre">hombre</option>
        </select><br><br>
    <label for="descripcion_enemigo">Descripcion</label>
    <input type="text" id="descripcion_enemigo" name="descripcion_enemigo"><br><br>

    <input type="submit" value="Registrar">
</form>
</body>
</html>