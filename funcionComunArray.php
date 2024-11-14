<?php

$libros = 
    [
        "Cien años de soledad",
        "Gabriel García Márquez"
    ];
    
    array_push($libros, "Poemas");
    array_pop($libros);  
    echo count($libros); 
    print_r($libros); 
   