métodos
<?php

$venta = new Venta();
$venta->total = 1280;
$venta->fecha = date("Y-m-d");
$venta->creacionFactura();

echo gettype($venta);

class Venta {
    public $total;
    public $fecha;

    public function creacionFactura() {
        echo "Se crea la factura";
    }
}