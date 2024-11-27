<?php
include_once "encabezado.php";
include_once "funciones.php";
$departamentos = obtenerDepartamentos();
?>
<div class="row">
    <div class="col-12">
        <h1>Agregar cliente</h1>
        <form action="guardar_cliente.php" method="post">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input required type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
            </div>
            <div class="form-group">
                <label for="edad">Edad</label>
                <input required type="number" class="form-control" name="edad" id="edad" placeholder="Edad">
            </div>
            <div class="form-group">
            <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" class="form-control" name="direccion" required><br><br>
        </div>
        <div class="form-group">
        <label for="sexo">Sexo:</label>
        <select id="sexo" name="sexo" required>
            <option value="Femenino">Femenino</option>
            <option value="Masculino">Masculino</option>
        </select><br><br>
        </div>
        <div class="form-group">
        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" class="form-control" name="telefono" pattern="[0-9]{8}" title="Debe tener 8 dígitos" required><br><br>
        </div>
            <div class="form-group">
                <label for="departamento">Departamento</label>
                <select class="form-control" name="departamento" id="departamento">
                    <?php foreach ($departamentos as $departamento) { ?>
                        <option value="<?php echo $departamento ?>"><?php echo $departamento ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <button class="btn btn-success">Guardar</button>
            </div>
        </form>
    </div>
</div>
<?php include_once "pie.php" ?>