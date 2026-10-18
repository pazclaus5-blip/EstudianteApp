<?php
require_once 'Estudiante.php';

$listaEstudiantes = [
    new Estudiante("Claudia Paz Lara", "53532", "Ing. Desarrollo de Software", 85.0, 90.0, 88.0),
    new Estudiante("Carlos Mendoza", "48201", "Ing. Sistemas", 60.0, 65.0, 50.0),
    new Estudiante("Ana María Torres", "51102", "Ing. Desarrollo de Software", 95.0, 100.0, 92.0),
    new Estudiante("Luis Fernando Gómez", "52489", "Ing. Industrial", 70.0, 75.0, 68.0),
    new Estudiante("Sofía Villarreal", "54310", "Ing. Desarrollo de Software", 55.0, 60.0, 62.0)
];

$sumaPromedios = 0;
$aprobados = 0;
$reprobados = 0;
$mejorEstudiante = null;
$maxPromedio = -1;

echo "SISTEMA DE GESTIÓN DE ESTUDIANTES\n";
echo "==========================================================\n\n";

foreach ($listaEstudiantes as $estudiante) {
    $prom = $estudiante->calcularPromedio();
    $aprobado = $estudiante->estaAprobado();
    
    $sumaPromedios += $prom;
    if ($aprobado) { $aprobados++; } else { $reprobados++; }

    if ($prom > $maxPromedio) {
        $maxPromedio = $prom;
        $mejorEstudiante = $estudiante;
    }

    $estado = $aprobado ? "APROBADO" : "REPROBADO";
    echo "Matrícula: " . $estudiante->getMatricula() . " | " . $estudiante->getNombre() . " | Promedio: " . number_format($prom, 2) . " pts | Estado: " . $estado . "\n";
}

$promedioGrupal = $sumaPromedios / count($listaEstudiantes);

echo "\n==========================================================\n";
echo "RESUMEN DEL GRUPO:\n";
echo "Total de estudiantes: " . count($listaEstudiantes) . "\n";
echo "Promedio general: " . number_format($promedioGrupal, 2) . " pts\n";
echo "Aprobados: " . $aprobados . " | Reprobados: " . $reprobados . "\n";
echo "Mejor estudiante: " . $mejorEstudiante->getNombre() . " (" . number_format($maxPromedio, 2) . " pts)\n";
?>
