<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pop-Up Formulario</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<button onclick="openPopup()">Abrir Pop-Up</button>


<div id="pop_up1" class="popup">
    <span class="close" onclick="closePopup()">&times;</span>
    <form id="formulario" class="form-popup" action="guardar.php" method="post" onsubmit="return validarFormulario()">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" required pattern="[0-9]+"><br><br> <!-- Utilizamos pattern="[0-9]+" para permitir solo números -->
        <label for="hora">¿A qué hora le podemos llamar?</label>
        <input type="time" id="hora" name="hora" required>
        <select id="ampm" name="ampm">
            <option value="am">a.m.</option>
            <option value="pm">p.m.</option>
        </select><br><br>
        <button type="submit">Enviar</button>
    </form>
</div>
<div id="pop_up2" class="popup2">
    Datos Enviados
</div>

<script src="script.js"></script>
</body>
</html>

