<?php
//conversión Implícita
$numero = 10;        // Entero
$texto = "5";        // Cadena

$suma = $numero + $texto;  // PHP convierte "5" a entero y suma
echo "La suma es: $suma";   // Muestra "La suma es: 15"

//Coversión Explícita

$numeroDecimal = 10.75;  // Flotante
$entero = (int) $numeroDecimal;  // Convierte a entero
echo "El valor entero es: $entero";  // Muestra 10

?>