<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Personal Diario</title>
</head>
<form action="config/config.php" method="post">
    <!-- Cursos -->
    <h2>Cursos</h2>
    <label for="nombre_curso">Nombre del curso</label>
    <input type="text" id="nombre_curso" name="nombre_curso"><br><br>
    <label for="calificacion_dedicacion">calificacion de dedicación</label>
    <input type="number" id="calificacion_dedicacion" name="calificacion_dedicacion"><br><br>
    <label for="practica_curso">practicaste el día de hoy?</label>
    <select id="practica_curso" name="practica_curso">
            <option value="1">SI</option>
            <option value="0">NO</option>
        </select><br><br>
    <label for="tareas_curso">estás al día con las tareas?</label>
    <select id="tareas_curso" name="tareas_curso">
            <option value="1">SI</option>
            <option value="0">NO</option>
        </select><br><br>
    <label for="gustar_curso">Te gusta el curso?</label>
    <select id="gustar_curso" name="gustar_curso">
            <option value="1">SI</option>
            <option value="0">NO</option>
        </select><br><br>
    <label for="futuro">Le ves futuro?</label>
    <select id="futuro" name="futuro">
            <option value="1">SI</option>
            <option value="0">NO</option>
        </select><br><br>


  



    <input type="submit" value="Registrar">
</form>
</body>
</html>