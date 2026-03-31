<?php

class Carro {
    public $marca;
    public $modelo;
    public $ano;
    public $cor;
    public $velocidadeMaxima;
    public $velocidadeAtual = 0;

    
    public function acelerar($valor) {
        $this->velocidadeAtual += $valor;

        if ($this->velocidadeAtual > $this->velocidadeMaxima) {
            $this->velocidadeAtual = $this->velocidadeMaxima;
        }

        echo "Acelerou para $this->velocidadeAtual km/h <br>";
    }

    public function frear($valor) {
        $this->velocidadeAtual -= $valor;

        if ($this->velocidadeAtual < 0) {
            $this->velocidadeAtual = 0;
        }

        echo "Reduziu para $this->velocidadeAtual km/h <br>";
    }

    public function exibirInformacoes() {
        echo "Marca: $this->marca <br>";
        echo "Modelo: $this->modelo <br>";
        echo "Ano: $this->ano <br>";
        echo "Cor: $this->cor <br>";
        echo "Velocidade Máxima: $this->velocidadeMaxima km/h <br>";
        echo "Velocidade Atual: $this->velocidadeAtual km/h <br><br>";
    }
}



$carro1 = new Carro();

$carro1->marca = "Toyota";
$carro1->modelo = "Corolla";
$carro1->ano = "2020";
$carro1->cor = "Prata";
$carro1->velocidadeMaxima = 180;

$carro1->acelerar(60);
$carro1->frear(20);
$carro1->exibirInformacoes();


$carro2 = new Carro();

$carro2->marca = "Honda";
$carro2->modelo = "Civic";
$carro2->ano = "2018";
$carro2->cor = "Preto";
$carro2->velocidadeMaxima = 200;

$carro2->acelerar(150);
$carro2->frear(50);
$carro2->exibirInformacoes();

?>