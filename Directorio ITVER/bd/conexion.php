<?php
    try {
        $cn = new mysqli("localhost", "root", "", "pweb12");
    } catch (Exception $e) {
        die("Contacta al Depto de T.I.");
    }
?>
