<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre = $_POST["nombre"];
    $mail = $_POST["mail"];
    $numero = $_POST["numero"];
    $mensaje = $_POST["mensaje"];
    echo '<script> window.location.href="mailto:noreply@eest.tecnica1vl.org?subject=NUEVOMENSAJE DE '.$nombre.'&body=Nombre: '.$nombre.'%0D%0ACorreo: '.$mail.'%0D%0ATelefono: '.$numero.'%0D%0AMensaje: '.$mensaje.'";window.location.href = "../contactos.php"; </script>';
}
?>