<?php
try {
    
    $resultado = dividir(10, 0);  
} catch (Exception $e) {
    
    echo "Se ha producido un error: " . $e->getMessage();
}
?>