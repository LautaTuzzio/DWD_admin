<?php
session_start();

$_SESSION['status']="unlogued"; 
header("Location: index.php");

?>