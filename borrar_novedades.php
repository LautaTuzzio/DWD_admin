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
    $novedad_id = $conn->real_escape_string($_POST['novedad_id']);

    $sql = "DELETE FROM novedades WHERE id='$novedad_id'";

    if ($conn->query($sql) === TRUE) {
        echo "Novedad eliminada exitosamente.";
        header("Location: admin.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
