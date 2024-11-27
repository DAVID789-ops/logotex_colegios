
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título de la página</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Encabezado Principal</h1>
        <nav>
            <ul>
                <li><a href="#section1">Sección 1</a></li>
                <li><a href="#section2">Sección 2</a></li>
                <li><a href="#section3">Sección 3</a></li>
            </ul>
        </nav>
    </header>
    <form method="POST" action="php.php">
        <p>
        <label for="nombre">nombre</label>
        <input type="text" name="name"/>
        </p>
        <p>
        <label for="apellido">apellido</label>
        <input type="text" name="apellido"/>
        </p>
        <input type="submit" value="enviar">
    <main>
        <section id="section1">
            <h2>Sección 1</h2>
            <p>Contenido de la sección 1.</p>
        </section>
        <section id="section2">
            <h2>Sección 2</h2>
            <p>Contenido de la sección 2.</p>
        </section>
        <section id="section3">
            <h2>Sección 3</h2>
            <p>Contenido de la sección 3.</p>
        </section>
    </main>
    
    <footer>
        <p>&copy; 2024 Nombre de la Empresa</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>

