<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sitio_web_institucional";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $seccion_id = $_POST['seccion_id'];
    $especialidad_id = $_POST['especialidad_id'];
    $titulo = $_POST['titulo'];
    $contenido = $_POST['contenido'];
    $orden = $_POST['orden'];
    
    $sql = "UPDATE secciones SET especialidad_id = ?, titulo = ?, contenido = ?, orden = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("issis", $especialidad_id, $titulo, $contenido, $orden, $seccion_id);

    if ($stmt->execute()) {
        echo "La sección ha sido actualizada exitosamente.";
    } else {
        echo "Error al actualizar la sección: " . $conn->error;
    }
    
    header("Location: admin.php");
    $stmt->close();
}

$conn->close();
?>