<?php
session_start();
if (!isset($_SESSION['Logueado'])) {
    # No esta logueado 
    header("Location: C:\xampp\htdocs\Directorio ITVER/doc/index.html");
}
require_once "../includes/header.php";
require_once "indexforma.php";
require_once "../includes/footer.php";
?>