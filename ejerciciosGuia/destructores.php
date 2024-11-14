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

    // Destructor
    public function __destruct() {
        echo "El objeto de Persona con nombre $this->nombre y edad $this->edad ha sido destruido.<br>";
    }

    public function presentarse() {
        echo "Hola, mi nombre es $this->nombre y tengo $this->edad años.<br>";
    }
}

// Crear una instancia de la clase Persona
$persona1 = new Persona("Juan", 30);
$persona1->presentarse();

// Destruir el objeto explícitamente (esto llamará al destructor)
unset($persona1);
?>