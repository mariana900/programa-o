<?php

class livro{
public $titulo;
public $autor;
public $numerodepaginas;
public $anodepublicacao;
}

$OAlienista = new livro ();
$OAlienista->titulo = "O alienista";
$OAlienista->autor = "Machado de Assis";
$OAlienista->numerodepaginas = "110";
$OAlienista->anodepublicacao = "1882";

echo "O título do primeiro livro é: " . $OAlienista->titulo . "<br>";
echo "O autor do primeiro livro é: " . $OAlienista->autor . "<br>";
echo "O número de páginas do primeiro livro é: " . $OAlienista->numerodepaginas . "<br>";
echo "O ano de publicação do primeiro livro é: " . $OAlienista->anodepublicacao . "<br><br>";

$TronoDeVidro = new livro ();
$TronoDeVidro->titulo = "Trono de Vidro";
$TronoDeVidro->autor = "Sarah J. Maas";
$TronoDeVidro->numerodepaginas = "392";
$TronoDeVidro->anodepublicacao = "2012";

echo "O título do segundo livro é: " . $TronoDeVidro->titulo . "<br>";
echo "O autor do segundo livro é: " . $TronoDeVidro->autor . "<br>";
echo "O número de páginas do segundo livro é: " . $TronoDeVidro->numerodepaginas . "<br>";
echo "O ano de publicação do segundo livro é: " . $TronoDeVidro->anodepublicacao . "<br>";

?>