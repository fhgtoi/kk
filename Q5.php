<?php

class Triangulo {
    private $base;
    private $altura;

    public function setBase(float $base): void {
        $this->base = $base;
    }

    public function setAltura(float $altura): void {
        $this->altura = $altura;
    }

    public function calculaArea(): float {
        return ($this->base * $this->altura) / 2;
    }
}

// Exemplo de uso
$triangulo = new Triangulo();
$triangulo->setBase(5.0);
$triangulo->setAltura(4.0);
echo "Área do triângulo: " . $triangulo->calculaArea();