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
        $autoridad_id = $_POST['autoridad_id'];
        $orden = $_POST['orden'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $imagen_url = $_POST['imagen_url'];
        $anos_activo = $_POST['anos_activo'];
        $id_trayectoria = $_POST['id_trayectoria'];
        $id_rol = $_POST['id_rol'];

        
        $sql = "UPDATE autoridades SET orden = ?, nombre = ?, apellido = ?, imagen = ?, años_activo = ?, id_trayectoria = ?, id_rol = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("isssiiii", $orden, $nombre, $apellido, $imagen_url, $anos_activo, $id_trayectoria, $id_rol, $autoridad_id);

        if ($stmt->execute()) {
            echo "La autoridad ha sido actualizada exitosamente.";
        } else {
            echo "Error al actualizar la autoridad: " . $conn->error;
        }
        
        header("Location: admin.php");
        $stmt->close();
    }

    $conn->close();
?>
