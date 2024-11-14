<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    echo "Nombre: $nombre <br>";
    echo "Edad: $edad <br>";
}
?>