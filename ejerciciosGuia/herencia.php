<?php
// Clase base
class Animal {
    public $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function hablar() {
        echo "El animal hace un sonido.\n";
    }
}

// Clase derivada
class Perro extends Animal {

    public function hablar() {
        echo "El perro hace guau.\n";
    }
}

$miPerro = new Perro("Rex");
echo $miPerro->nombre . "\n";  // Accede al atributo heredado
$miPerro->hablar();  // Llama al método sobrescrito
?>