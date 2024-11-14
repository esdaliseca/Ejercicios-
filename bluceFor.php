<?php

for ($i = 1; $i <= 10; $i++) {

    echo $i;


}

for ($i = 1; $i <= 10; $i++) {

    if ($i % 2 == 0) {
        continue;

    }
    echo "<br>". $i;
}


