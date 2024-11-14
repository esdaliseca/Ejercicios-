<?php
$colores = array("rojo", "verde", "azul");
$mensaje = "Los colores son: " . implode(", ", $colores);  // implode() une los elementos del array en una cadena
echo $mensaje;  // Muestra "Los colores son: rojo, verde, azul"
?>