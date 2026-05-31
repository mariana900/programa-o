<?php

class Contato {

    private $nome;
    private $telefone;

    public function __construct($nome, $telefone) {
        $this->nome = $nome;
        $this->telefone = $telefone;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getTelefone() {
        return $this->telefone;
    }
}

class Agenda {

    private $contatos = [];

    public function adicionarContato($nome, $telefone) {

        $contato = new Contato($nome, $telefone);

        $this->contatos[] = $contato;
    }

    public function listar() {

        echo "<h3>Lista de Contatos</h3>";

        foreach ($this->contatos as $contato) {

            echo "Nome: " . $contato->getNome() .
                 " | Telefone: " . $contato->getTelefone() . "<br>";
        }
    }
}

$agenda = new Agenda();

$agenda->adicionarContato("Mariana", "99999-1111");
$agenda->adicionarContato("Lara", "99999-2222");
$agenda->adicionarContato("Carlos", "99999-3333");

$agenda->listar();

?>