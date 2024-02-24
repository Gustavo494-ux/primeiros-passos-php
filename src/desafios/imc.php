<?php

$altura = 1.76;
$peso = 116;

$resultado =  $peso/($altura **2);
$resultado = 

$mensagem = "Seu peso é $peso, sua altura é $altura, seu IMC é $resultado isto significa ";

    if ($resultado < 18.5){
        $mensagem = $mensagem."Baixo peso";
    }

    if (18.5 <= $resultado && $resultado <= 24.9){
        $mensagem = $mensagem."Peso Normal";
    }
    
    if (25 <= $resultado && $resultado <= 29.9){
        $mensagem = $mensagem."Sobrepeso";
    }
    
    if (30 <= $resultado && $resultado <= 34.9){
        $mensagem = $mensagem."Obesidade Grau I";
    }
    
    if (35 <= $resultado && $resultado <= 39.9){
        $mensagem = $mensagem."Obesidade Grau II";
    }
    
    if ($resultado >= 40){
        $mensagem = $mensagem."Obesidade Grau III";
    }
    
echo $mensagem.PHP_EOL;