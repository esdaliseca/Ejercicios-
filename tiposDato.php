<?php

$numero= 1;
$decimal = 3.14;
$cadena= "La gravedad de la tierra es:";
$falso= false;
$nulo= null;
$arreglo = array(1, 2, 3);
class Persona {}
$objeto = new Persona();
$nan = acos(2);

echo gettype($numero);
echo "<br>" . gettype($decimal);
echo "<br>" . gettype($cadena);
echo "<br>" . gettype($falso);
echo "<br>" . gettype($nulo);
echo "<br>" . gettype($arreglo);
echo "<br>" . gettype($objeto);
echo gettype($nan);



