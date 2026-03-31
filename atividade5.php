<?php

class retangulo{
public $comprimento;
public $largura;
}

$r1 = new retangulo();
$r1->comprimento = 5;
$r1->largura = 3;

echo "Primeiro retângulo<br>";
echo "Comprimento: " . $r1->comprimento . "<br>";
echo "Largura: " . $r1->largura . "<br>";
echo "Área: " . ($r1->comprimento * $r1->largura) . "<br>";
echo "Perímetro: " . (2 * ($r1->comprimento + $r1->largura)) . "<br><br>";

$r2 = new retangulo();
$r2->comprimento = 10;
$r2->largura = 4;

echo "Segundo retângulo<br>";
echo "Comprimento: " . $r2->comprimento . "<br>";
echo "Largura: " . $r2->largura . "<br>";
echo "Área: " . ($r2->comprimento * $r2->largura) . "<br>";
echo "Perímetro: " . (2 * ($r2->comprimento + $r2->largura));

?>