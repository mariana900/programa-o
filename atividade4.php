<?php

class aluno{
public $nome;
public $matricula;
public $nota1;
public $nota2;
}

$a1 = new aluno();
$a1->nome = "João";
$a1->matricula = "123";
$a1->nota1 = 7;
$a1->nota2 = 9;

$media1 = ($a1->nota1 + $a1->nota2) / 2;
$situacao1 = ($media1 >= 7) ? "Aprovado" : "Reprovado";


echo "Primeiro aluno<br>";
echo "Nome: " . $a1->nome . "<br>";
echo "Matrícula: " . $a1->matricula . "<br>";
echo "Nota 1: " . $a1->nota1 . "<br>";
echo "Nota 2: " . $a1->nota2 . "<br>";
echo "Média: " . $media1 . "<br>";
echo "Situação: " . $situacao1 . "<br><br>";


$a2 = new aluno();
$a2->nome = "Maria";
$a2->matricula = "456";
$a2->nota1 = 6;
$a2->nota2 = 8;

$media2 = ($a2->nota1 + $a2->nota2) / 2;
$situacao1 = ($media1 >= 7) ? "Aprovado" : "Reprovado";


echo "Segundo aluno<br>";
echo "Nome: " . $a2->nome . "<br>";
echo "Matrícula: " . $a2->matricula . "<br>";
echo "Nota 1: " . $a2->nota1 . "<br>";
echo "Nota 2: " . $a2->nota2 . "<br>";
echo "Média: " . $media2 . "<br>";
echo "Situação: " . $situacao1 . "<br><br>";


?>