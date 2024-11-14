<?php
function dividir($a, $b) {
    if ($b == 0) {
        throw new Exception("No se puede dividir por cero.");
    }
    return $a / $b;
}

try {
    echo dividir(10, 0);  // Esto lanzará una excepción
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();  // Captura la excepción y muestra el mensaje de error
}
?>