<?php
function testExcepcion() {
    throw new Exception("Algo salió mal", 1);  // Lanza una excepción
}

try {
    testExcepcion();
} catch (Exception $e) {
    echo "Mensaje: " . $e->getMessage() . "<br>";
    echo "Código: " . $e->getCode() . "<br>";
    echo "Archivo: " . $e->getFile() . "<br>";
    echo "Línea: " . $e->getLine() . "<br>";
    echo "Rastro de la pila: " . $e->getTraceAsString() . "<br>";
}
?>