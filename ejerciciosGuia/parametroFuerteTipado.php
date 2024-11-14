<?php
declare(strict_types=1);  // Activar el tipado estricto

function multiplicar(int $a, int $b) {
    return $a * $b;
}

echo multiplicar(10, 5);  // Muestra 50
// echo multiplicar(10, "5");  // Generaría un error, ya que se pasa un string
?>