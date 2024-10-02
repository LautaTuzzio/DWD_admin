<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sitio_web_institucional";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Procesamiento de datos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $especialidad = $_POST['especialidad'];

    // Preparar la consulta SQL
    $sql = "INSERT INTO especialidades (nombre, descripcion, especialidad) VALUES (?, ?, ?)";

    // Preparar la declaración SQL
    $stmt = $conn->prepare($sql);

    // Enlazar parámetros y ejecutar la consulta
    $stmt->bind_param("sss", $nombre, $descripcion, $especialidad);
    
    if ($stmt->execute()) {
        echo "<script>alert('Datos guardados correctamente');</script>";
        header("Location: admin.php");
    } else {
        echo "<script>alert('Error al guardar los datos');</script>";
    }

    // Liberar recursos
    $stmt->close();
}

// Cierre de la conexión a la base de datos
$conn->close();
?>
