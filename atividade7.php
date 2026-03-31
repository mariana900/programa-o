<?php
class Triangulo {
    public $lado1;
    public $lado2;
    public $lado3;
    public $altura;
    public $base;

    public function calcularArea() {
        return ($this->base * $this->altura) / 2;
    }

    public function tipo() {
        if ($this->lado1 == $this->lado2 && $this->lado2 == $this->lado3) {
            return "Equilátero";
        } elseif ($this->lado1 == $this->lado2 || $this->lado1 == $this->lado3 || $this->lado2 == $this->lado3) {
            return "Isósceles";
        } else {
            return "Escaleno";
        }
    }

    public function exibir() {
        echo "Base: $this->base <br>";
        echo "Altura: $this->altura <br>";
        echo "Área: " . $this->calcularArea() . "<br>";
        echo "Tipo: " . $this->tipo() . "<br><br>";
    }
}


$t1 = new Triangulo();
$t1->base = 10;
$t1->altura = 5;
$t1->lado1 = 5;
$t1->lado2 = 5;
$t1->lado3 = 5;
$t1->exibir();

$t2 = new Triangulo();
$t2->base = 8;
$t2->altura = 4;
$t2->lado1 = 3;
$t2->lado2 = 4;
$t2->lado3 = 5;
$t2->exibir();
?>