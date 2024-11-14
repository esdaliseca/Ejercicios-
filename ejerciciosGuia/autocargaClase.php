<?php
// Función de autocarga
function cargarClase($nombreClase) {
    include $nombreClase . '.php'; // Asume que cada clase está en un archivo con el mismo nombre
}

// Registrar la función de autocarga
spl_autoload_register('cargarClase');

// Usar una clase sin necesidad de incluir manualmente su archivo
$persona1 = new Persona("Juan", 30);
$persona1->presentarse();
?>