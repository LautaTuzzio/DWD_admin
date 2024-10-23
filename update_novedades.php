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
    $novedad_id = $_POST['novedad_id'];
    $titulo = $_POST['titulo'];
    $texto = $_POST['texto'];
    $imagen = $_POST['imagen'];
    
    $sql = "UPDATE novedades SET titulo = ?, texto = ?, imagen = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $titulo, $texto, $imagen, $novedad_id);

    if ($stmt->execute()) {
        echo "La novedad ha sido actualizada exitosamente.";
    } else {
        echo "Error al actualizar la novedad: " . $conn->error;
    }
    
    header("Location: admin.php");
    $stmt->close();
}

$conn->close();
?>