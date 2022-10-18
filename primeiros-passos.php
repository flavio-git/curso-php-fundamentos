<?php

// printing
echo "Hello PHP", PHP_EOL;

// variáveis
$name = "PHP"; // string
$idade = 27; // integer
$ativo = true;
$dinheiro = 1.99;
$cores = Array("Azul", "Preto", "Branco");
$estrutura = Array("Flavio", 10, true);

echo 'Estou utilizando ' . $name, PHP_EOL; // para concatenar string utilizamos o '.'
echo "Estou utilizando $name que tem $idade de existência", PHP_EOL; // template string -> tem que utilizar as aspas duplas

// tipos de algumas variáveis
echo gettype($name), PHP_EOL;
echo gettype($idade), PHP_EOL;
echo gettype($ativo), PHP_EOL;
echo gettype($dinheiro), PHP_EOL;
echo gettype($cores), PHP_EOL;


// controles 

$idade_visitante = 18;

if($idade_visitante >= 18){
    echo "Visitante pode entrar na festa\n";
} else {
    echo "Visitante não pode entrar na festa\n";
}

$pode_entrar = $idade_visitante >= 18 ? "Pode entrar\n" : "Não pode entrar";
echo $pode_entrar . PHP_EOL;


echo "While statement" . PHP_EOL;
$controlador = 1;
while($controlador <= 10){
    echo "Controlador = $controlador\n";
    $controlador++;
}

echo "For classic" . PHP_EOL;
for($controlador = 11; $controlador <= 20; $controlador++){
    echo "Controlador = $controlador\n";
}

echo "Foreach" . PHP_EOL;
foreach($cores as $cor){
    echo $cor . PHP_EOL;
}

echo "Continue statement" . PHP_EOL;
for($controlador = 11; $controlador <= 20; $controlador++){
    if ($controlador == 15){
        continue;
    } else {
        echo "Controlador = $controlador\n";
    }
}

echo "Break statement" . PHP_EOL;
for($controlador = 11; $controlador <= 20; $controlador++){
    if ($controlador == 15){
        break;
    } else {
        echo "Controlador = $controlador\n";
    }
}

// lendo um valor do terminal
/*
$valorString = readline("Digite uma algo: ");
$valorNumber = number_format(readline("Digite um valor: "), 0);

echo "Você digitou: " . PHP_EOL;
echo "$valorString" . PHP_EOL;
echo "$valorNumber" . PHP_EOL;
*/

// arrays

//$idadesList = array(15, 32, 65, 28, 45, 78); // não é mais preciso utilizar a palavra array
$idadesList = [15, 32, 65, 28, 45, 78];
foreach($idadesList as $idade){
    echo $idade . PHP_EOL;
}

$tamanhoArray = count($idadesList);
echo "O array idades está preenchido com: $tamanhoArray idades" . PHP_EOL;

for($i = 0; $i < count($idadesList); $i++){
    echo $idadesList[$i] . PHP_EOL;
}

$newArray = []; // arrays são dinâmicos
for($i = 0; $i < 11; $i++){
    $newArray[$i] = $i;
}

for($i = 0; $i < count($newArray); $i++){
    echo $newArray[$i] . PHP_EOL;
}

print_r($idadesList);

print_r(array_filter($idadesList, fn($idade) => $idade > 50));

// arrays associativos
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

foreach($contas as $conta){
    echo $conta['titular'] . PHP_EOL;
}

$conta4 = [
    'titular' => "Andressa",
    'saldo' => 2531.12
];

array_push($contas, $conta4);

for($i = 0; $i < count($contas); $i++){
    echo $contas[$i]['titular'] . PHP_EOL;
}

$contas[] = [
    'titular' => "Guilherme",
    'saldo' => 3000.12
];

for($i = 0; $i < count($contas); $i++){
    echo $contas[$i]['titular'] . PHP_EOL;
}

function sacaValor($array, &$conta_titular, $valor_saque){
    $tem_conta = false;
    foreach($array as $conta){
        if($conta_titular == $conta['titular']){
            if ($conta['saldo'] >= $valor_saque){
                $conta['saldo'] -= $valor_saque;
                $tem_conta = true;
            } else {
                $tem_conta = true;
                echo "Saldo insuficiente." . PHP_EOL;
            }  
        }
    }
    if($tem_conta == false){
        echo "Não há conta para esse nome" . PHP_EOL;
    }
}

sacaValor(array: $contas, conta_titular: "Eduardo", valor_saque: 2000.00);
sacaValor(array: $contas, conta_titular: "Andressa", valor_saque: 3000.00);
sacaValor(array: $contas, conta_titular: "Andressa", valor_saque: 2000.00);

echo "" . PHP_EOL;

for($i = 0; $i < count($contas); $i++){
    echo "Titular: {$contas[$i]['titular']}, Saldo: {$contas[$i]['saldo']}" . PHP_EOL;
}





