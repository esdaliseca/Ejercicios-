<?php

// Crear una instancia de la clase Venta
$venta = new Venta(1280, date("Y-m-d"));
$venta->creacionFactura();

// Acceder a la propiedad estática
Venta::$totalVentas = 5000;  // Asignar valor a la propiedad estática
echo "<br>Total de ventas: " . Venta::$totalVentas; // Imprimir propiedad estática

// Llamar al método estático sin crear una instancia
Venta::crearFacturaEstatica();

// Definición de la clase Venta
class Venta {
    public $total;  // Propiedad no estática
    public $fecha;  // Propiedad no estática
    
    // Propiedad estática
    public static $totalVentas = 0;  // Propiedad estática que acumula el total de ventas

    // Constructor para asignar valores a las propiedades no estáticas
    public function __construct($total, $fecha) {
        $this->total = $total;
        $this->fecha = $fecha;
    }

    // Método no estático
    public function creacionFactura() {
        echo "Se crea la factura para la venta de $this->total con fecha $this->fecha<br>";
    }

    // Método estático
    public static function crearFacturaEstatica() {
        echo "Se crea la factura estática (sin necesidad de instancia).<br>";
    }
}