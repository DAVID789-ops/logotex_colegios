<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Personal Diario</title>
</head>
<body>
    <h1>Registro Personal Diario</h1>
    <form action="config/config.php" method="post">
        <!-- Usuario -->
        <label for="usuario_id">Usuario ID:</label>
        <input type="number" id="usuario_id" name="usuario_id" required><br><br>

        <!-- Diario -->
        <h2>Diario</h2>
        <label for="descripcion_diario">Descripción:</label><br>
        <textarea id="descripcion_diario" name="descripcion_diario" rows="5" cols="50" required></textarea><br><br>

        <!-- Prioridades -->
        <h2>Prioridades</h2>
        <label for="prioridad_tipo">Tipo:</label>
        <select id="prioridad_tipo" name="prioridad_tipo">
            <option value="Diaria">Diaria</option>
            <option value="General">General</option>
        </select><br><br>

        <label for="descripcion_prioridad">Descripción:</label><br>
        <textarea id="descripcion_prioridad" name="descripcion_prioridad" rows="3" cols="50" required></textarea><br><br>
        <label for="calificacion_prioridades">Calificación nivel de dedicación</label>
        <input type="number" id="calificacion_prioridades" name="calificacion_prioridades" required><br><br>
        
        <!-- Metas -->
        <h2>Metas</h2>
        <label for="meta_tipo">Tipo:</label>
        <select id="meta_tipo" name="meta_tipo">
            <option value="Corto Plazo">Corto Plazo</option>
            <option value="Mediano Plazo">Mediano Plazo</option>
            <option value="Largo Plazo">Largo Plazo</option>
        </select><br><br>

        <label for="descripcion_meta">Descripción:</label><br>
        <textarea id="descripcion_meta" name="descripcion_meta" rows="3" cols="50" required></textarea><br><br>

        <label for="fecha_inicio_meta">Fecha Inicio:</label>
        <input type="date" id="fecha_inicio_meta" name="fecha_inicio_meta" required><br><br>

        <label for="fecha_fin_meta">Fecha Fin:</label>
        <input type="date" id="fecha_fin_meta" name="fecha_fin_meta" required><br><br>
        <label for="calificacion_metas">Calificación nivel de Dedicación</label>
        <input type="number" id="calificacion_metas" name="calificacion_metas" required><br><br>
        

        <!-- Comida -->
        <h2>Comida</h2>
        <label for="tipo_comida">Tipo de Comida:</label>
        <select id="tipo_comida" name="tipo_comida">
            <option value="Desayuno">Desayuno</option>
            <option value="Almuerzo">Almuerzo</option>
            <option value="Cena">Cena</option>
            <option value="Snack">Snack</option>
        </select><br><br>

        <label for="calorias">Calorías:</label>
        <input type="number" id="calorias" name="calorias" required><br><br>
        <label for="calificacion_comida">Calificación nivel de dedicación</label>
        <input type="number" id="calificacion_comida" name="calificacion_comida" required><br><br>
        

        <!-- Agua -->
        <h2>Agua</h2>
        <label for="vasos">Vasos de Agua:</label>
        <input type="number" id="vasos" name="vasos" required><br><br>

        <!-- Sueño -->
        <h2>Sueño</h2>
        <label for="descripcion_sueno">Descripción:</label><br>
        <textarea id="descripcion_sueno" name="descripcion_sueno" rows="5" cols="50" required></textarea><br><br>

        <label for="horas_dormidas">Horas Dormidas:</label>
        <input type="number" id="horas_dormidas" name="horas_dormidas" required><br><br>
        <label for="calificacion_sueño">Calificación nivel de calidad de sueño</label>
        <input type="number" id="calificacion_sueño" name="calificacion_sueño" required><br><br>
        

        <!-- Ejercicio -->
        <h2>Ejercicio</h2>
        <label for="tipo_ejercicio">Tipo de Ejercicio:</label>
        <input type="text" id="tipo_ejercicio" name="tipo_ejercicio" required><br><br>

        <label for="duracion_ejercicio">Duración (minutos):</label>
        <input type="number" id="duracion_ejercicio" name="duracion_ejercicio" required><br><br>

        
        <label for="calificacion_ejercicio">Calificación nivel de dedicación</label>
        <input type="number" id="calificacion_ejercicio" name="calificacion_ejercicio" required><br><br>
        
        <!-- Enfermedades -->
        <h2>Enfermedades</h2>

        <label for="enfermedades">Enfermedades:</label>
        <input type="text" id="enfermedades" name="enfermedades"><br><br>
        <label for="calificacion_enfermedad">Calificación gravedad de la enfermedad:</label>
        <input type="number" id="calificacion_enfermedad" name="calificacion_enfermedad"><br><br>
        <label for="sintomas">Sintomas:</label><br>
        <textarea type="text" id="sintomas" name="sintomas" cols="50" rows="5"></textarea><br><br>
        <label for="mejoras">Mejoras</label>
        <select id="mejoras" name="mejoras">
            <option value="1">SI</option>
            <option value="0">NO</option>
        </select><br><br>
        <label for="salud">Calificacion de salud:</label>
        <input type="number" id="salud" name="salud"><br><br>

        <!-- Viajes Astrales -->
        <h2>Viajes Astrales</h2>
        <label for="calificacion_viaje">Tuviste viaje Astral?</label>
        <select id="calificacion_viaje" name="calificacion_viaje">
            <option value="1">SI</option>
            <option value="0">NO</option>
        </select><br><br>
        <label for="viaje_descripcion">Descripción</label>
        <input type="number" id="viaje_descripcion" name="viaje_descripcion"><br><br>
        
        <!-- Clima -->
        <h2>Clima</h2>
        <label for="tipo_clima">Tipo de clima</label>
        <select id="tipo_clima" name="tipo_clima">
            <option value="soleado">soleado</option>
            <option value="nublado">nublado</option>
            <option value="lluvia">lluvia</option>
            <option value="chipi">chipi</option>
            
        </select><br><br>
        <!-- datos curiosos -->
    <h2>Datos Curiosos</h2>
    <label for="nombre_curioso">Nombre Dato Curioso</label>
    <input type="text" id="nombre_curioso" name="nombre_curioso"><br><br>
    <label for="descripcion_curioso">Descripcion Dato Curioso</label>
    <input type="textarea" id="descripcion_curioso" name="descripcion_curioso"><br><br>
 <!-- economico -->
 <h2>Económico</h2>
 <label for="ingresos">INGRESOS</label>
 <input type="number" id="ingresos" name="ingresos"><br><br>
 <label for="pasivos">Pasivos</label>
 <input type="number" id="pasivos" name="pasivos"><br><br>
 <!-- Cursos por Aprender -->
 <h2>Cursos por Aprender</h2>
 <label for="nombre_curso">Curso</label>
 <input type="text" id="nombre_curso" name="nombre_curso"><br><br>
 <label for="descripcion_curso">Descripción</label>
 <input type="textarea" id="descripcion_curso" name="descripcion_curso"><br><br>
 <!-- Dios -->
 <h2>Dios</h2>
 <label for="dios">meditacion</label>
 <input type="text" id="dios" name="dios"><br><br>
 <label for="tiempo_meditacion">tiempo de meditacion</label>
 <input type="textarea" id="tiempo_meditacion" name="tiempo_meditacion"><br><br>
 <label for="adoracion">adoracion</label>
 <input type="text" id="adoracion" name="adoracion"><br><br>
 <label for="tiempo_adoracion">tiempo de adoracion</label>
 <input type="textarea" id="tiempo_adoracion" name="tiempo_adoracion"><br><br>
 <label for="biblia">lectura biblia</label>
 <input type="text" id="biblia" name="biblia"><br><br>
 <label for="otros_oracion">Oración por otros</label>
 <select id="otros_oracion" name="otros_oracion">
            <option value="1">si</option>
            <option value="0">ni</option>
        </select><br><br>
        <label for="visitas">Visitas</label>
 <select id="visitas" name="visitas">
            <option value="1">si</option>
            <option value="0">ni</option>
        </select><br><br>
        <label for="dios_calificacion">califacion</label>
        <input type="text" id="dios_calificacion" name="dios_calificacion"><br><br>
 

        <input type="submit" value="Registrar">
    </form>
</body>
</html>