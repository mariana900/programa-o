<?php

class ContaBancaria {

    private $titular;
    private $saldo;

    public function __construct($titular) {
        $this->titular = $titular;
        $this->saldo = 0;
    }

    public function depositar($valor) {

        if ($valor <= 0) {
            echo "Valor inválido!<br>";
            return;
        }

        $this->saldo += $valor;
    }

    public function sacar($valor) {

        if ($valor > $this->saldo) {
            echo "Saldo insuficiente!<br>";
            return;
        }

        $this->saldo -= $valor;
    }

    public function getTitular() {
        return $this->titular;
    }

    public function getSaldo() {
        return $this->saldo;
    }
}

$conta = new ContaBancaria("Mariana");

$conta->depositar(500);
$conta->sacar(200);

echo "Titular: " . $conta->getTitular() . "<br>";
echo "Saldo final: R$ " . $conta->getSaldo();

?>