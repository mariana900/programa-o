<?php

class Retangulo {

    private $largura;
    private $altura;

    public function __construct($largura, $altura) {
        $this->largura = $largura;
        $this->altura = $altura;
    }

    public function getLargura() {
        return $this->largura;
    }

    public function setLargura($largura) {
        $this->largura = $largura;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function calcularArea() {
        return $this->largura * $this->altura;
    }

    public function calcularPerimetro() {
        return 2 * ($this->largura + $this->altura);
    }
}

$r1 = new Retangulo(10, 5);
$r2 = new Retangulo(8, 8);

echo "Área do Retângulo 1: " . $r1->calcularArea() . "<br>";
echo "Área do Retângulo 2: " . $r2->calcularArea() . "<br>";

if ($r1->calcularArea() > $r2->calcularArea()) {
    echo "Retângulo 1 possui maior área.";
} else {
    echo "Retângulo 2 possui maior área.";
}

?>