<?php
$estudiantes = [
    [
        "nombre" => "Carlos Pérez",
        "edad" => 20,
        "cursos" => [
            "Matemáticas" => 18,
            "Inglés" => 15,
            "Historia" => 17
        ]
    ],
    [
        "nombre" => "Ana Gómez",
        "edad" => 22,
        "cursos" => [
            "Matemáticas" => 19,
            "Inglés" => 14,
            "Historia" => 16
        ]
    ],
    [
        "nombre" => "Luis Torres",
        "edad" => 21,
        "cursos" => [
            "Matemáticas" => 16,
            "Inglés" => 17,
            "Historia" => 20
        ]
    ]
];

// Imprimir los datos
foreach ($estudiantes as $estudiante) {
    echo "Nombre: " . $estudiante["nombre"] . "\n";
    echo "Edad: " . $estudiante["edad"] . "\n";
    echo "Calificaciones:\n";
    
    foreach ($estudiante["cursos"] as $curso => $calificacion) {
        echo "- $curso: $calificacion\n";
    }
    
    echo "\n"; // Salto de línea entre estudiantes
}
?>