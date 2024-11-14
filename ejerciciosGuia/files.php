<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['archivo'])) {
    $archivo = $_FILES['archivo'];
    $nombre_archivo = $archivo['name'];
    $tipo_archivo = $archivo['type'];
    $tamano_archivo = $archivo['size'];

    echo "Nombre del archivo: $nombre_archivo <br>";
    echo "Tipo de archivo: $tipo_archivo <br>";
    echo "Tamaño del archivo: $tamano_archivo bytes <br>";
}
?>