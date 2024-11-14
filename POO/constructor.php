<?php

$venta = new Venta(1280, date("Y-m-d"));
$venta->creacionFactura();

class Venta {
    public $total;
    public $fecha;

    public function __construct($total, $fecha) {
        $this->total = $total;
        $this->fecha = $fecha;
    }

    public function creacionFactura() {
        echo "Se crea la factura";
    }
}