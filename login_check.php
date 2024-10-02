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
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE user='$user' ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($pass === $row['password']) {
            header("Location: admin.php");
        } else {
            header("Location: index.php");
            
        }
    } else {
        header("Location: index.php");
    }
}

$conn->close();
?>