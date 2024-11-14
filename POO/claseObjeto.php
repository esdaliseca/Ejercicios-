<?php
$venta = new Venta(); 

$venta->total = 2000;
$venta->fecha = date("Y-m-d");

print_r($venta); 

class Venta {
    public $total;
    public $fecha; 
}