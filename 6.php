<?php

class Pessoa {

    private $idade;

    public function setIdade($idade) {

        if ($idade < 0) {
            echo 'Idade inválida!';
            return; // Correção: interrompe a execução para impedir a atribuição
        }

        $this->idade = $idade;
    }

    public function getIdade() {
        return $this->idade;
    }
}

$p = new Pessoa();

$p->setIdade(-5);

echo $p->getIdade();

?>