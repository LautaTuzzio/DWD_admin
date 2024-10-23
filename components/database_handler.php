<?php
$host = 'localhost';
$dbname = 'sitio_web_institucional';
$username = 'root';
$password = '';

// Función para conectar a la base de datos
function connectDB() {
    global $host, $dbname, $username, $password;
    try {
        $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    } catch(PDOException $e) {
        die("Error de conexión: " . $e->getMessage());
    }
}

// Función para obtener información de una especialidad
function getEspecialidadInfo($especialidad) {
    $db = connectDB();
    $query = $db->prepare("SELECT * FROM especialidades WHERE nombre = :especialidad");
    $query->execute(['especialidad' => $especialidad]);
    return $query->fetch(PDO::FETCH_ASSOC);
}

// Función para obtener secciones de una especialidad
function getEspecialidadSecciones($especialidad) {
    $db = connectDB();
    $query = $db->prepare("
        SELECT s.* 
        FROM secciones s
        JOIN especialidades e ON s.especialidad_id = e.id
        WHERE e.nombre = :especialidad
        ORDER BY s.orden
    ");
    $query->execute(['especialidad' => $especialidad]);
    return $query->fetchAll(PDO::FETCH_ASSOC);
}
?>