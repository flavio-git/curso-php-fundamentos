<?php

$numeroFixo = 21;

$numeros = [
    random_int(1,200),
    random_int(1,200),
    random_int(1,200),
    random_int(1,200),
    random_int(1,200),
    random_int(1,200),
    $numeroFixo
];

print_r($numeros); // printa o array de uma maneira "humana"

sort($numeros); // classifica o array

print_r($numeros);

$sum = array_sum($numeros); // soma os elementos do array

echo "Sum: $sum" . PHP_EOL;

$somaMaisDez = function ($numero) {
    return $numero + 10;
};

//$numerosMaisDez = array_map($somaMaisDez, $numeros); // para cada elemento de $numeros irá somar dez
$numerosMaisDez = array_map(fn($numero) => $numero + 10, $numeros);

print_r($numerosMaisDez);

$numerosMaiorQueCem = array_filter($numeros, fn($numero) => $numero >= 100);

print_r($numerosMaiorQueCem);

shuffle($numeros); // embaralha novamente o array

print_r($numeros);

$temNumeroFixo = in_array($numeroFixo, $numeros); // procura e devolve um boolean
$posicaoNumeroFixo = array_search($numeroFixo, $numeros); // procura e devolve a posição do numeroFixo (21)

echo $temNumeroFixo . PHP_EOL;
print_r($posicaoNumeroFixo);

echo " " . PHP_EOL;


$notas = [
    [
        'aluno' => 'ana',
        'nota' => 9
    ], 
    [
        'aluno' => 'flavio',
        'nota' => 5
    ],
    [
        'aluno' => 'fernanda',
        'nota' => 10
    ]
];


// function ordenaPorNotas(array $nota1, array $nota2)
// {
//     if($nota1['nota'] > $nota2['nota']){
//         return -1;
//     }

//     if($nota2['nota'] > $nota1['nota']){
//         return 1;
//     }

//     return 0;
// }

function ordenaPorNotas(array $nota1, array $nota2)
{
    return $nota2['nota'] <=> $nota1['nota'];
}

sort($notas); // se não passarmos um comparador o PHP irá tentar classificar de alguma forma
var_dump($notas); // print a variavel com mais informação

usort($notas, 'ordenaPorNotas'); // estamos dizendo para o PHP como classificar o array

var_dump($notas);

// array associativo
$notas2 = [
    'ana' => 9,
    'flavio' => 5,
    'fernanda' => 10,
    'gabriela' => null
];

// $notas2 = [
//     0 => 9,
//     1 => 5,
//     2 => 10,
//     3 => null
// ];

arsort($notas2); // mantem a associacao com a chave
var_dump($notas2);

ksort($notas2); // classifica pela chave
var_dump($notas2);

echo "Validando arrays: " . PHP_EOL;
$is_array = is_array($notas2); // valida se é um array
$is_array_list = array_is_list($notas2); // retorna um boolean... valida se o array possui indices que começam em 0 e vão até length-1

var_dump($is_array);
var_dump($is_array_list);

echo "Procurando chaves: " . PHP_EOL;
$procura_chave = array_key_exists('gabriela', $notas2); // procura uma chave em um array
$procura_chave_nao_nula = isset($notas2['gabriela']); // procura uma chave e verifica se é não nula
$procura_chave_nao_nula2 = isset($notas2['ana']);

var_dump($procura_chave);
var_dump($procura_chave_nao_nula);
var_dump($procura_chave_nao_nula2);

echo "Procurando valores: " . PHP_EOL;
$procura_nota_5 = in_array(5, $notas2); // procura o valor 5 no array e devolve true ou false
var_dump($procura_nota_5);

$procura_nota_5_chave = array_search(5, $notas2);
var_dump($procura_nota_5_chave);






