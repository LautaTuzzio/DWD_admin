<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sitio_web_institucional";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Verificar si se recibió una solicitud POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $especialidad_id = $_POST['especialidad_id'];
    $titulo = $_POST['titulo'];
    $contenido = $_POST['contenido'];
    $orden = $_POST['orden'];

    // Consulta para insertar datos en la base de datos
    $sql_especialidad = "INSERT INTO `secciones` (`especialidad_id`, `titulo`, `contenido`, `orden`) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql_especialidad);
    $stmt->bind_param("issi", $especialidad_id, $titulo, $contenido, $orden);

    if ($stmt->execute()) {
        echo "Nuevo registro creado exitosamente.";
        header("Location: admin.php"); 
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

$stmt->close();
}

$conn->close();
?>