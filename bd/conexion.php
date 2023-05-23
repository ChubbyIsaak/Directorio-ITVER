<?php
try {
    $cn = new mysqli("localhost", "root", "administrador.sql", "pweb12");
} catch (Exception $e) {
    die("Contacta al Depto de T.I.");
}
?>