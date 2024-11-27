CREATE DATABASE IF NOT EXISTS PersonalTracker;
USE PersonalTracker;

-- Crear tabla Usuarios
CREATE TABLE IF NOT EXISTS Usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255),
    fecha_nacimiento DATE
);

-- Crear tabla Diario
CREATE TABLE IF NOT EXISTS Diario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    fecha DATE,
    hora TIME,
    descripcion TEXT,
    FOREIGN KEY (usuario_id) REFERENCES Usuarios(id)
);

-- Crear tabla Prioridades
CREATE TABLE IF NOT EXISTS Prioridades (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    tipo VARCHAR(50),
    descripcion TEXT,
    calificacion INT,
    fecha DATE,
    FOREIGN KEY (usuario_id) REFERENCES Usuarios(id)
);

-- Crear tabla Metas
CREATE TABLE IF NOT EXISTS Metas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    tipo VARCHAR(50),
    descripcion TEXT,
    calificacion INT,
    fecha_inicio DATE,
    fecha_fin DATE,
    FOREIGN KEY (usuario_id) REFERENCES Usuarios(id)
);

-- Crear tabla Comida
CREATE TABLE IF NOT EXISTS Comida (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    fecha DATE,
    comida VARCHAR(50),
    calorias INT,
    FOREIGN KEY (usuario_id) REFERENCES Usuarios(id)
);

-- Crear tabla Agua
CREATE TABLE IF NOT EXISTS Agua (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    fecha DATE,
    vasos INT,
    FOREIGN KEY (usuario_id) REFERENCES Usuarios(id)
);

-- Crear tabla Sueño
CREATE TABLE IF NOT EXISTS Sueno (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    fecha DATE,
    descripcion TEXT,
    calificacion INT,
    horas_dormidas INT,
    FOREIGN KEY (usuario_id) REFERENCES Usuarios(id)
);

-- Crear tabla Ejercicio
CREATE TABLE IF NOT EXISTS Ejercicio (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    fecha DATE,
    calificacion INT,
    tipo_ejercicio VARCHAR(255),
    duracion INT,
    FOREIGN KEY (usuario_id) REFERENCES Usuarios(id)
);

-- Crear tabla Enfermedades
CREATE TABLE IF NOT EXISTS Enfermedades (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    enfermedad VARCHAR(255),
    calificacion INT,
    sintomas TEXT,
    mejoras BOOLEAN,
    salud INT,
    FOREIGN KEY (usuario_id) REFERENCES Usuarios(id)
);

-- Crear tabla ViajesAstrales
CREATE TABLE IF NOT EXISTS ViajesAstrales (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    fecha DATE DEFAULT CURRENT_DATE,
    calificacion INT,
    descripcion TEXT,
    FOREIGN KEY (usuario_id) REFERENCES Usuarios(id)
);

-- Crear tabla Cursos
CREATE TABLE IF NOT EXISTS Cursos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    curso VARCHAR(255),
    descripcion TEXT,
    
    calificacion INT,
    
    practique BOOLEAN,
    tareas BOOLEAN,
    me_gusta BOOLEAN,
    le_veo_futuro BOOLEAN,
    FOREIGN KEY (usuario_id) REFERENCES Usuarios(id)
);

-- Crear tabla Proyectos
CREATE TABLE IF NOT EXISTS Proyectos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    proyecto VARCHAR(16),
    descripcion TEXT,
    avance BOOLEAN,
    estrategia TEXT,
    calificacion INT,
    fecha_inicio DATE DEFAULT CURRENT_DATE,
    oportunidades TEXT,
    debilidades TEXT,
    fortalezas TEXT,
    amenazas TEXT,
    FOREIGN KEY (usuario_id) REFERENCES Usuarios(id)
);

-- Crear tabla Amistades
CREATE TABLE IF NOT EXISTS Amistades (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    amistad VARCHAR(50),
    sexo VARCHAR(6),
    fortalezas TEXT,
    calificacion INT,
    oportunidades TEXT,
    debilidades TEXT,
    amenazas TEXT,
    FOREIGN KEY (usuario_id) REFERENCES Usuarios(id)
);

-- Crear tabla Clima
CREATE TABLE IF NOT EXISTS Clima (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    fecha_inicio DATE DEFAULT CURRENT_DATE,
    temperatura INT,
    clima VARCHAR(10),
    FOREIGN KEY (usuario_id) REFERENCES Usuarios(id)
);

-- Crear tabla DatosCuriosos
CREATE TABLE IF NOT EXISTS DatosCuriosos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    fecha DATE,
    titulo VARCHAR(255),
    descripcion TEXT,
    FOREIGN KEY (usuario_id) REFERENCES Usuarios(id)
);

-- Crear tabla Economico 
CREATE TABLE IF NOT EXISTS Economico (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    fecha DATE DEFAULT CURRENT_DATE,
    ingresos DECIMAL(10, 2),
    pasivos DECIMAL(10, 2),
    FOREIGN KEY (usuario_id) REFERENCES Usuarios(id)
);

-- Crear tabla CursosPorAprender
CREATE TABLE IF NOT EXISTS CursosPorAprender (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    curso VARCHAR(255),
    descripcion TEXT,
    fecha DATE DEFAULT CURRENT_DATE,
    FOREIGN KEY (usuario_id) REFERENCES Usuarios(id)
);

-- Crear tabla Dios 
CREATE TABLE IF NOT EXISTS Dios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    fecha DATE DEFAULT CURRENT_DATE,
    oraciones INT,
    tiempo_oracion INT,
    adoracion INT,
    tiempo_adoracion INT,
    lectura_biblia INT,
    tiempo_lectura_biblia INT,
    oracion_otros BOOLEAN,
    visitas BOOLEAN,
    calificacion INT,
    FOREIGN KEY (usuario_id) REFERENCES Usuarios(id)
);

-- Crear tabla Enemigos
CREATE TABLE IF NOT EXISTS Enemigos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    enemigo VARCHAR(255),
    sexo TEXT,
    descripcion TEXT,
    FOREIGN KEY (usuario_id) REFERENCES Usuarios(id)
);

-- Crear tabla HabitosMalos
CREATE TABLE IF NOT EXISTS HabitosMalos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    habito VARCHAR(15),
    descripcion TEXT,
    calificacion INT,
    tiempo_dedicado INT,
    FOREIGN KEY (usuario_id) REFERENCES Usuarios(id)
);

-- Crear tabla Idiomas
CREATE TABLE IF NOT EXISTS Idiomas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    idioma VARCHAR(255),
    calificacion INT,
    speaking INT,
    reading INT,
    grammar INT,
    writing INT,
    listening INT,
    nuevas_palabras INT,
    actividades TEXT,
    FOREIGN KEY (usuario_id) REFERENCES Usuarios(id)
);

-- Crear tabla ListaQueHaceres
CREATE TABLE IF NOT EXISTS ListaQueHaceres (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    fecha DATE,
    calificacion INT,
    actividad VARCHAR(255),
    tiempo_dedicado INT,
    FOREIGN KEY (usuario_id) REFERENCES Usuarios(id)
);

-- Crear tabla Peso
CREATE TABLE IF NOT EXISTS Peso (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    fecha DATE,
    peso DECIMAL(5, 2),
    objetivo VARCHAR(50),
    FOREIGN KEY (usuario_id) REFERENCES Usuarios(id)
);

-- Crear tabla Misericordia
CREATE TABLE IF NOT EXISTS Misericordia (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    fecha DATE,
    obra_caridad TEXT,
    calificacion INT,
    receptor VARCHAR(255),
    sensacion INT,
    divino BOOLEAN,
    FOREIGN KEY (usuario_id) REFERENCES Usuarios(id)
);