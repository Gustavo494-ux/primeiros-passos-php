<?php

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

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf.PHP_EOL;
    echo $conta['titular'].PHP_EOL;
}