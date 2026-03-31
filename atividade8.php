<?php

class circulo{
public $raio;
}

$c1 = new circulo();
$c1->raio = 3;

echo "Primeiro círculo<br>";
echo "Raio: " . $c1->raio . "<br>";
echo "Área: " . (3.14 * $c1->raio * $c1->raio) . "<br>";
echo "Perímetro: " . (2 * 3.14 * $c1->raio) . "<br><br>";

$c2 = new circulo();
$c2->raio = 5;

echo "Segundo círculo<br>";
echo "Raio: " . $c2->raio . "<br>";
echo "Área: " . (3.14 * $c2->raio * $c2->raio) . "<br>";
echo "Perímetro: " . (2 * 3.14 * $c2->raio);

?>