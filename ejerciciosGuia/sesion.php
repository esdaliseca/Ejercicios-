<?php
session_start(); // Inicia la sesión
$_SESSION['nombre'] = "Juan"; // Asigna un valor a una variable de sesión
echo "Sesión iniciada para: " . $_SESSION['nombre'];
?>