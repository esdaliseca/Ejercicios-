<?php
class Vehiculo {
    // Constante de clase
    const TIPO = "Automóvil";

    public function mostrarTipo() {
        echo "El tipo de vehículo es: " . self::TIPO;
    }
}

// Acceder a la constante sin crear una instancia
echo Vehiculo::TIPO; // Salida: Automóvil
?>