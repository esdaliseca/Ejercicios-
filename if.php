<?php

$compra= 80.000;

if($compra >= 90.000){
    echo "¡Tienes el descuento!";
} else {
    echo "No aplicas al descuento";
}

$edad= 70;

if ($edad == 18) {
    echo "<br>" . "¡Eres mayor de edad, amigo!";
} elseif ($edad > 18 && $edad < 50) {
    echo "¡Eres mayor de edad, amigo!";
}elseif ($edad >50) {
    echo "Tercera edad";

}else{
        echo "<br>" . "Lo siento amigo";

    }
