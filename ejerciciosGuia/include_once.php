<?php
// archivo.php
echo "Este es el archivo incluido una vez.";
?>

<?php
// archivo principal
include_once 'archivo.php'; // Incluye el archivo solo una vez
include_once 'archivo.php'; // No se incluirá nuevamente
?>