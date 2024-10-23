<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sitio_web_institucional";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Verificar si se recibió una solicitud POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $orden = $_POST['orden'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $imagen_url = $_POST['imagen_url'];
    $anos_activo = $_POST['anos_activo'];
    $id_trayectoria = $_POST['id_trayectoria'];
    $id_rol = $_POST['id_rol'];

    // Consulta para insertar datos en la base de datos
    $sql = "INSERT INTO autoridades (orden, nombre, apellido, imagen, años_activo, id_trayectoria, id_rol) 
            VALUES ('$orden', '$nombre', '$apellido', '$imagen_url', '$anos_activo', '$id_trayectoria', '$id_rol')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuevo registro creado exitosamente.";
        // Redirigir a otra página después de la inserción
        header("Location: admin.php"); // Cambia esto a la página que desees
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
