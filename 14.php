<?php

class Estoque {

    private $produtos = [];

    public function adicionarProduto($nome, $quantidade) {

        $this->produtos[] = [
            'nome' => $nome,
            'qtd' => $quantidade
        ];
    }

    public function listarProdutos() {

        echo "<h3>Produtos em estoque:</h3>";

        foreach ($this->produtos as $produto) {

            echo "Produto: " . $produto['nome'] .
                 " | Quantidade: " . $produto['qtd'] . "<br>";
        }
    }

    public function totalItens() {

        $total = 0;

        foreach ($this->produtos as $produto) {
            $total += $produto['qtd'];
        }

        return $total;
    }
}

$estoque = new Estoque();

$estoque->adicionarProduto("Teclado", 10);
$estoque->adicionarProduto("Mouse", 15);
$estoque->adicionarProduto("Monitor", 5);

$estoque->listarProdutos();

echo "<br>Total de itens: " . $estoque->totalItens();

?>