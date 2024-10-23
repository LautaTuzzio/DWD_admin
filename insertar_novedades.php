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
    $titulo = $conn->real_escape_string($_POST['titulo']);
    $texto = $conn->real_escape_string($_POST['texto']);
    $imagen = $conn->real_escape_string($_POST['imagen']);

    $sql = "INSERT INTO novedades (titulo, texto, imagen) VALUES ('$titulo', '$texto', '$imagen')";

    if ($conn->query($sql) === TRUE) {
        echo "Nueva novedad insertada exitosamente.";
        header("Location: admin.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
