<?php

$conta1 = [
    'titular' => "Flávio",
    'saldo' => 1000.00
];

$conta2 = [
    'titular' => "Fernanda",
    'saldo' => 850.35
];

$conta3 = [
    'titular' => "Augusto",
    'saldo' => 5237.83
];

$contas = [$conta1, $conta2, $conta3];

function sacaValor($array, $contaParaAlterar, $valor_saque){
    foreach($array as $conta){
        if($conta['titular'] == $contaParaAlterar['titular'] && $conta['saldo'] >= $valor_saque){
            $conta['saldo'] -= $valor_saque;
            echo "Efetuei o saque." . PHP_EOL;
        } else {
            echo "Saldo insuficiente." . PHP_EOL;
        }
    } 
}

sacaValor(array: $contas, contaParaAlterar: $contas[2], valor_saque: 3000.00);
//sacaValor(array: $contas, conta: $conta2, valor_saque: 800.00);

echo "" . PHP_EOL;

for($i = 0; $i < count($contas); $i++){
    echo "Titular: {$contas[$i]['titular']}, Saldo: {$contas[$i]['saldo']}" . PHP_EOL;
}


