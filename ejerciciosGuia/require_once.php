<?php
// archivo.php
echo "Este es un archivo requerido una sola vez.";
?>

<?php
// archivo principal
require_once 'archivo.php'; // Requiere el archivo solo una vez
require_once 'archivo.php'; // No se incluirá nuevamente
?>