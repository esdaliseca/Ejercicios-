<?php
// Definir la interfaz
interface Volador {
    public function volar();
}

// Clase que implementa la interfaz
class Pájaro implements Volador {
    public function volar() {
        echo "El pájaro está volando.\n";
    }
}

// Otra clase que implementa la misma interfaz
class Avión implements Volador {
    public function volar() {
        echo "El avión está volando.\n";
    }
}

$miPajaro = new Pájaro();
$miPajaro->volar();

$miAvion = new Avión();
$miAvion->volar();
?>