<?php
class Persona {
    public $nombre;
    public $edad;
  
    function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
  
    function saludar() {
        return "Hola, soy " . $this->nombre;
    }
}

$persona = new Persona("Freimar", 25);
echo $persona->saludar();  // Muestra "Hola, soy Freimar"
?>