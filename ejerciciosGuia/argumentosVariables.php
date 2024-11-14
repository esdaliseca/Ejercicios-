<?php
function sumarTodos(...$numeros) {
    $suma = 0;
    foreach ($numeros as $numero) {
        $suma += $numero;
    }
    return $suma;
}

echo sumarTodos(1, 2, 3, 4, 5);  // Muestra 15
?>