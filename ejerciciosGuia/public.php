<?php
class Persona {
    public $nombre;

    // Constructor para inicializar el nombre
    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    // Método público
    public function saludar() {
        echo "Hola, mi nombre es " . $this->nombre . ".<br>";
    }
}

// Instanciar la clase después de su declaración y pasar el nombre al constructor
$persona = new Persona("Juan");
$persona->saludar();
?>