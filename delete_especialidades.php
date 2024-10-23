<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sitio_web_institucional";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $seccionId = $_POST['seccion_id'];
    
    $stmt = $conn->prepare("DELETE FROM secciones WHERE id = ?");
    $stmt->bind_param("i", $seccionId);

    if ($stmt->execute()) {
        echo "Sección eliminada con éxito.";
        header("Location: admin.php");
    } else {
        echo "Error al eliminar la sección: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>