<?php
class Persona {
    protected $nombre;
    
    // Método protegido para mostrar el saludo
    protected function saludar() {
        echo "Hola, mi nombre es " . $this->nombre . ".<br>";
    }

    // Método público para establecer el nombre
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    // Método público para obtener el nombre (opcional)
    public function getNombre() {
        return $this->nombre;
    }
}

class Empleado extends Persona {
    // Método público en la clase hija
    public function presentar() {
        // Accede al método protegido desde la clase hija
        $this->saludar();
    }
}

$empleado = new Empleado();
$empleado->setNombre("Ana");  // Establece el nombre usando el método público
$empleado->presentar();  // Llama al método protegido desde la clase hija
?>