<?php

class funcionario{
public $nome;
public $cargo;
public $salario;
public $dataAdmissao;
}

$f1 = new funcionario();
$f1->nome = "Ana";
$f1->cargo = "Atendente";
$f1->salario = 2000;
$f1->dataAdmissao = "02/05/2022";

$salarioAnual1 = $f1->salario * 12;

echo "Primeiro funcionário: " . $f1->nome . "<br>";
echo "Cargo: " . $f1->cargo . "<br>";
echo "Data de admissão: " . $f1->dataAdmissao . "<br>";
echo "Salário: " . $f1->salario . "<br>";
echo "Salário anual: " . $salarioAnual1 . "<br><br>";

$f2 = new funcionario();
$f2->nome = "Carlos";
$f2->cargo = "Gerente";
$f2->salario = 4000;
$f2->dataAdmissao = "18/07/2020";

$salarioAnual2 = $f2->salario * 12;

echo "Segundo funcionário: " . $f2->nome . "<br>";
echo "Cargo: " . $f2->cargo . "<br>";
echo "Data de admissão: " . $f2->dataAdmissao . "<br>";
echo "Salário: " . $f2->salario . "<br>";
echo "Salário anual: " . $salarioAnual2;

?>