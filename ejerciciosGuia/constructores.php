<?php
class Persona {
    public $nombre;
    public $edad;

    // Constructor
    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        echo "Objeto de Persona creado. Nombre: $nombre, Edad: $edad<br>";
    }

    public function presentarse() {
        echo "Hola, mi nombre es $this->nombre y tengo $this->edad años.<br>";
    }
}

// Crear una instancia de la clase Persona
$persona1 = new Persona("Juan", 30); // El constructor se ejecuta automáticamente
$persona1->presentarse();
?>