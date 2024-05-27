<?php

include 'funcoes.php';

$contasCorrentes= [
    12345678911 => [
        'titular' => 'Gustavo',
        'saldo' => 1000
    ],
    12345678912 => [
        'titular' => 'Maria',
        'saldo' => 10000,
    ],
    12345678913 => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
];

titularComLetrasMaiusculas($contasCorrentes);
removerConta($contasCorrentes[2]);
foreach ($contasCorrentes as $cpf => $conta) {
    exibirMensagem(
        " $cpf $titular $saldo");
}