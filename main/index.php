<?php
session_start();
if (!isset($_SESSION['Logueado'])) {
    # No esta logueado 
    header("Location: ../index.php");
}
require_once "../includes/header.php";
require_once "indexforma.php";
require_once "../includes/footer.php";
?>