<?php

function exibirMensagem($mensagem){
    echo $mensagem.PHP_EOL;
}

function sacar(float $conta, float $valorASacar){
    if ($valorASacar >$conta['saldo']){
        exibirMensagem('Você não pode sacar');
    } else{
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}

function depositar(float $conta, float $valorADepositar){
    if ($valorADepositar <= 0) return $conta;

    $conta['saldo'] += $valorADepositar;
    return $conta;
}