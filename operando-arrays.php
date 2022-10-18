<?php

$notas1Bimestre = [
    'ana' => 9,
    'flavio' => 5,
    'fernanda' => 10,
    'gabriela' => 8
];


$notas2Bimestre = [
    'ana' => 6,
    'flavio' => 7,
    'fernanda' => 10,
];

var_dump(array_diff($notas1Bimestre, $notas2Bimestre)); // traz a diferença entre arrays, porém o critério avaliado nesse função é o valor não a chave
var_dump(array_diff_key($notas1Bimestre, $notas2Bimestre)); // traz a diferença entre arrays validando pela chave
var_dump(array_diff_assoc($notas1Bimestre, $notas2Bimestre)); // valida chave e valor... 


$array1 = [0,1,2,];
$array2 = ['zero', 'one', 'two'];
$array3 = array_combine($array1, $array2); // uni dois arrays... sendo que o primeiro será a chave e o segundo será o valor. Os dois array tem que ter o mesmo tamanho

var_dump($array3);

var_dump(array_flip($array3)); // troca chave pelo valor


// merge e +

$alunos1 = [
    'flavio',
    'fernanda',
    'gabriela'
];

$alunos2 = [
    'flavio',
    'fernanda',
    'gabriela',
    'raquel'
];

$alunos3 = array_merge($alunos1, $alunos2); // nesse caso temos um merge, todos os elementos do segundo array serão adicionados ao final do primeiro
$alunos4 = $alunos1 + $alunos2; // aqui temos uma união de conjuntos, nesse caso só a 'raquel' será adicionada
$alunos5 = [...$alunos1, 'ricardo', ...$alunos2]; // spread operator

print_r($alunos3);
print_r($alunos4);
print_r($alunos5);

array_push($alunos5, 'guilherme', 'luisa'); // adiciona elementos ao final do array
array_unshift($alunos5, 'felipe', 'maria'); // adiciona elementos ao inicio do array

print_r($alunos5);

$primeiro_elemento_saiu = array_shift($alunos5); // tira e retorna o primeiro elemento do array
$ultimo_elemento_saiu = array_pop($alunos5); // tira e retorna o ultimo elemento do array

echo "Tirando o primeiro elemento: {$primeiro_elemento_saiu}" . PHP_EOL;
echo "Tirando o ultimo elemento: {$ultimo_elemento_saiu}" . PHP_EOL;

print_r($alunos5);

// list

$aluno = ['flavio', 8, 30];

/*
$nome = $aluno[0];
$nota = $aluno[1];
$idade = $aluno[2];
*/

//[$nome, $nota, $idade] = $aluno;          // mesmo efeito do exemplo abaixo
list($nome, $nota, $idade) = $aluno;

var_dump($nome, $nota, $idade);


// extract
$ricardo = [
    'ricardoNome' => 'ricardo',
    'ricardoNota' => 7,
    'ricardoIdade' => 22
];

print_r($ricardo);
extract($ricardo);

echo "Extraindo os dados do Ricardo: " . PHP_EOL;
var_dump($ricardoNome, $ricardoNota, $ricardoIdade);

// compact

$eduardaNome = 'eduardo';
$eduardaNota = 10;
$eduardaIdade = 25;

$eduarda = compact('eduardaNome', 'eduardaNota', 'eduardaIdade');

echo "Compactando os dados da Eduarda: " . PHP_EOL;
var_dump($eduarda);


