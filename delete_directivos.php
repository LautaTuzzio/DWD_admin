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
    $autoridadId = $_POST['autoridad_id'];

    
    $stmt = $conn->prepare("DELETE FROM autoridades WHERE id = ?");
    $stmt->bind_param("i", $autoridadId);

    if ($stmt->execute()) {
        echo "Registro eliminado con éxito.";
        header("Location: admin.php");
    } else {
        echo "Error al eliminar el registro: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>