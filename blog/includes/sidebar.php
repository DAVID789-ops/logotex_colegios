<?php require_once 'includes/helpers.php';?>
            
                <!-- barra lateral-->
            <aside id="sidebar">

            <?php if (isset($_SESSION['usuario'])) : ?>
                <div id="login" class="bloque">
                    <h3>Bienvenido <?=$_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellidos']?>    </h3>
                </div>
                <?php endif; ?>


                <div id="login" class="bloque">
                    <h3>Identificate</h3>
                    <form action="login.php" method="POST">
                        <label for="email">Email</label>
                        <input type="email" name="email"/>
                        <label for="password">contraseña</label>
                        <input type="passwrod" name="password"/>
                        <input type="submit" value="Entrar"/>
                    </form>

                </div>
                
                <div id="register" class="bloque">
                <h3>Registrate</h3>

                <?php if (isset($_SESSION['completado'])): ?>
                    <div class="aleta alerta-exito">
                        <?=$_SESSION['completado'] ?>
                    </div>
                    <?php elseif(isset($_SESSION['errores']['general'])): ?>
                        <div class="aleta alerta-exito">
                        <?=$_SESSION['errores']['general'] ?>
                    </div>
                    <?php endif; ?>

                    <form action="registro.php" method="POST">
                        

                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre"/>
                        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ""; ?>
                        
                        <label for="apellido">Apellidos</label>
                        <input type="text" name="apellido"/>
                        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellido') : ""; ?>
                        <label for="email">Email</label>
                        <input type="email" name="email"/>
                        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ""; ?>
                        <label for="password">contraseña</label>
                        <input type="password" name="password"/>
                        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') : ""; ?>
                        <input type="submit" name="submit" value="Registrar"/>
                    </form>
                    <?php borrarError();?>
                </div>
                
            </aside>