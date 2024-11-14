<?php
function sumar(int $a, int $b): int {
    return $a + $b;
}

echo sumar(10, 5);  // Correcto: 15
// echo sumar(10, "5");  // Esto causaría un error
?>