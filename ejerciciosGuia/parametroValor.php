<?php
function aumentar($numero) {
    $numero = $numero + 10;
    echo "El número dentro de la función es: $numero";
}

$valor = 5;
aumentar($valor);  // Muestra "El número dentro de la función es: 15"
echo "<br>";
echo "El valor fuera de la función es: $valor";  // Muestra "El valor fuera de la función es: 5"
?>