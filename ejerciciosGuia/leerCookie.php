<?php
if (isset($_COOKIE['usuario'])) {
    echo "Valor de la cookie 'usuario': " . $_COOKIE['usuario'];
} else {
    echo "La cookie no está establecida.";
}
?>