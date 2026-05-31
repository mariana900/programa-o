<?php

class Carro {

    private $modelo;

    public function __construct($modelo) {
        $this->modelo = $modelo;
    }

    public function getModelo() {
        return $this->modelo;
    }
}

$c = new Carro('Fusca'); // Correção: usar a palavra-chave new para criar o objeto

echo $c->getModelo();

?>