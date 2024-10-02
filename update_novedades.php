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
        $novedades_id = $_POST['novedad_id'];
        $titulo = $_POST['titulo'];
        $texto = $_POST['texto'];
        $imagen_url = $_POST['imagen_url'];

        // Preparar y vincular los parámetros correctamente
        $sql = "UPDATE novedades SET titulo = ?, texto = ?, imagen = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssi", $titulo, $texto, $imagen_url, $novedades_id);
        // "sssi" significa: string, string, string, integer

        if ($stmt->execute()) {
            echo "La novedad ha sido actualizada exitosamente.";
        } else {
            echo "Error al actualizar la novedad: " . $stmt->error;
        }
        
        $stmt->close();
        $conn->close();
        
        // Mover el header después de cerrar la conexión y asegurarse de que no haya output antes
        header("Location: admin.php");
        exit(); // Agregar exit después del header
    }
?>