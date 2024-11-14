<?php
for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) {
        continue;  // Salta la iteración cuando $i es igual a 3
    }
    echo "Número: $i <br>";
}
?>