<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Personal Diario</title>
</head>
<form action="config/config.php" method="post">
    <!-- amsitades -->
    <h2>Amistades</h2>
    <label for="nombre_amigo">Nombre del amigo(a)</label>
    <input type="text" id="nombre_amigo" name="nombre_amigo"><br><br>
    <label for="sexo">sexo</label>
    <select id="sexo" name="sexo">
            <option value="mujer">mujer</option>
            <option value="hombre">hombre</option>
        </select><br><br>
    <label for="amigo_fortalezas">fortalezas de la amistad</label>
    <input type="text" id="amigo_fortalezas" name="amigo_fortalezas"><br><br>
    <label for="amigo_oportunidades">Oportunidades</label>
    <input type="text" id="amigo_oportunidades" name="amigo_oportunidades"><br><br>        
    <label for="amigo_debilidades">Debilidades</label>
    <input type="text" id="amigo_debilidades" name="amigo_debilidades"><br><br>
    <label for="amigo_amenazas">Amenazas</label>
    <input type="text" id="amigo_amenazas" name="amigo_amenazas"><br><br>


  



    <input type="submit" value="Registrar">
</form>
</body>
</html>