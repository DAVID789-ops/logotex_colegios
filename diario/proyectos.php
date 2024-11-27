<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Personal Diario</title>
</head>
<form action="config/config.php" method="post">
    <!-- proyecto -->
    <h2>Proyectos</h2>
    <label for="nombre_proyecto">Nombre del proyecto</label>
    <input type="text" id="nombre_proyecto" name="nombre_proyecto"><br><br>
    <label for="descripcion_proyecto">descripcion</label>
    <input type="textarea" id="descripcion_proyecto" name="descripcion_proyecto"><br><br>
    <label for="avance_proyecto">Avance Proyecto</label>
    <select id="avance_proyecto" name="avance_proyecto">
            <option value="1">si</option>
            <option value="0">no</option>
        </select><br><br>
    
    <label for="proyecto_oportunidades">Oportunidades</label>
    <input type="text" id="proyecto_oportunidades" name="proyecto_oportunidades"><br><br>
    <label for="proyecto_debilidades">Debilidades</label>
    <input type="text" id="proyecto_debilidades" name="proyecto_debilidades"><br><br>
    <label for="proyecto_fortalezas">Fortalezas</label>
    <input type="text" id="proyecto_fortalezas" name="proyecto_fortalezas"><br><br>
    <label for="proyecto_amenazas">Amenazas</label>
    <input type="text" id="proyecto_amenazas" name="proyecto_amenazas"><br><br>



  



    <input type="submit" value="Registrar">
</form>
</body>
</html>