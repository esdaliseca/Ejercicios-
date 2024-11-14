<?php

$meses =50;

switch ($meses) {
    case 1:
    case 2:
    case 3:
        echo "Es vereano";
        break;
    case 4:
    case 5:
    case 6:
        echo "Es primavera";
        break;
    case 7:
    case 8:
    case 9:
        echo "es otoño";
        break;
    case 10:
    case 11:
    case 12:
        echo "Es invierno";
        break;
    default:
        echo "Dato invalido";
}

