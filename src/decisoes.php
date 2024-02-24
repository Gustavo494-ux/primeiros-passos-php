<?php

$idade = 17;
$numeroDePessoas = 2;
echo "Você só pode entrar a partir de  18 anos ou ";
echo "a partir de 16 anos acompanhado".PHP_EOL;


$mensagem = "Você tem $idade anos.";
if ($idade >= 18) {
    $mensagem = $mensagem."Pode entrar";
} else if ($idade >= 16 && $numeroDePessoas > 1) {
        $mensagem = $mensagem." está acompanhado, então pode entrar.";
    } else {
        $mensagem = $mensagem."Não pode entrar";
    }


$mensagem.PHP_EOL;

echo $mensagem;
