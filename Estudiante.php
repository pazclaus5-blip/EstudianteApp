<?php
/**
 * Clase Estudiante que define la estructura y comportamiento de cada alumno.
 * Aplica los principios de POO: Encapsulamiento, Constructores y Métodos.
 */
class Estudiante {
    private string $nombre;
    private string $matricula;
    private string $carrera;
    private float $nota1;
    private float $nota2;
    private float $nota3;

    public function __construct(string $nombre, string $matricula, string $carrera, float $nota1, float $nota2, float $nota3) {
        $this->nombre = $nombre;
        $this->matricula = $matricula;
        $this->carrera = $carrera;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->nota3 = $nota3;
    }

    public function calcularPromedio(): float {
        return ($this->nota1 + $this->nota2 + $this->nota3) / 3.0;
    }

    public function estaAprobado(): bool {
        return $this->calcularPromedio() >= 70.0;
    }

    public function getNombre(): string { return $this->nombre; }
    public function getMatricula(): string { return $this->matricula; }
    public function getCarrera(): string { return $this->carrera; }
}
?>
