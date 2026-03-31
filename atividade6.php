<?php

class Conta {
    public $numeroConta;
    public $titular;
    public $saldo;
    public $taxaJuros;

    
    public function depositar($valor) {
        $this->saldo += $valor;
        echo "Depósito de R$ $valor realizado.<br>";
    }

    
    public function sacar($valor) {
        if ($valor <= $this->saldo) {
            $this->saldo -= $valor;
            echo "Saque de R$ $valor realizado.<br>";
        } else {
            echo "Saldo insuficiente.<br>";
        }
    }

    
    public function exibirInformacoes() {
        echo "Número da conta: $this->numeroConta <br>";
        echo "Titular: $this->titular <br>";
        echo "Saldo: R$ $this->saldo <br>";
        echo "Taxa de juros: $this->taxaJuros% <br><br>";
    }
}



$conta1 = new Conta();

$conta1->numeroConta = "001";
$conta1->titular = "Mariana";
$conta1->saldo = 1000;
$conta1->taxaJuros = 5;

$conta1->depositar(200);
$conta1->sacar(150);
$conta1->exibirInformacoes();



$conta2 = new Conta();

$conta2->numeroConta = "002";
$conta2->titular = "João";
$conta2->saldo = 500;
$conta2->taxaJuros = 3;

$conta2->depositar(300);
$conta2->sacar(900); 
$conta2->exibirInformacoes();

?>