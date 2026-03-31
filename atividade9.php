<?php
class Pessoa {
    public $nome;
    public $idade;
    public $genero;

    public function calcularIdadeDetalhada() {
        $anos = $this->idade;
        $meses = $anos * 12;
        $dias = $anos * 365;

        return "Anos: $anos, Meses: $meses, Dias: $dias";
    }

    public function exibir() {
        echo "Nome: $this->nome <br>";
        echo "Idade: $this->idade <br>";
        echo "Gênero: $this->genero <br>";
        echo $this->calcularIdadeDetalhada() . "<br><br>";
    }
}


$p1 = new Pessoa();
$p1->nome = "Ana";
$p1->idade = 20;
$p1->genero = "Feminino";
$p1->exibir();

$p2 = new Pessoa();
$p2->nome = "Carlos";
$p2->idade = 25;
$p2->genero = "Masculino";
$p2->exibir();
?>