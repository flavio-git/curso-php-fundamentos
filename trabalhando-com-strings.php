<?php

$texto = "Ms Truss has insisted she will lead the Conservatives into the next general election, despite U-turns leaving her battling to salvage her authority.";
$palavra = "next";

$procura_palavra_texto = str_contains($texto, $palavra);
var_dump($procura_palavra_texto);

var_dump(str_starts_with($texto, "MS"));
var_dump(str_starts_with($texto, "Ms"));

var_dump(str_ends_with($texto, "authority"));
var_dump(str_ends_with($texto, "authority."));

$texto = "Hello PHP!";
var_dump(str_split($texto));

$qtdPalavras = str_word_count($texto);
$qtdChars = count_chars($texto);

echo "Quantidade de palavras em $texto: $qtdPalavras" . PHP_EOL;

$texto = "      Hello PHP!      ";
var_dump(ltrim($texto)); // tira os espaços em branco à esquerda

$texto = "      Hello PHP!      ";
var_dump(trim($texto)); // tira os espaços em branco do início e do final

$texto = "Trocando-o-hifen-por-espaço-em-branco";
var_dump($texto);
var_dump(str_replace('-',' ', $texto));

$texto = "a b c d e f g h i j k l m n o p q r s t u v x z";
$texto = str_replace(' ','', $texto);
var_dump(str_shuffle($texto));

$texto = "flavio@gmail.com";
$indiceArroba = strpos($texto, "@");
var_dump(substr($texto, 0, $indiceArroba));
var_dump(substr($texto, $indiceArroba));
var_dump(substr($texto, $indiceArroba + 1));

$senha = "minhasenha"; // temos 10 caracteres
$qtdChars = strlen($senha); // CONTA OS BYTES !!!
echo "Senha: $senha | Quantidade Bytes: $qtdChars bytes" . PHP_EOL; 

$senha = "ãí"; // temos dois caracteres, porém é necessário 4 bytes para armazenar
$qtdChars = strlen($senha);
echo "Senha: $senha | Quantidade Bytes: $qtdChars bytes" . PHP_EOL; 

// utilizando mbstring
echo "Utilizando o mbstring" . PHP_EOL;
$qtdChars = mb_strlen($senha);
echo "Senha: $senha | Quantidade Bytes: $qtdChars bytes" . PHP_EOL;

// explode

$usuarioString = "Gabriel Dias, 18, gabriel@gmail.com";
list($usuarioNome, $usuarioIdade, $usuarioEmail) = explode(',', $usuarioString);

// implode

$telefones = [
    'flavio' => ['51 99999-9999', '51 88888-9999', '51 33333-9999'],
    'gabriel' => ['21 22222-9999', '51 66666-9999', '51 33333-9999']
];

$telefonesFlavio = implode(", ", $telefones['flavio']);
var_dump($telefonesFlavio);


// heredoc
// essa syntax mantém os espaçamentos e a estrutura

function geraEmail(string $usuario)
{
    $conteudoEmail = <<<END
        Olá $usuario, bom dia!
            Estamos encaminhando esse e-mail pois não conseguimos
            contato por telefone.

        Nossa equipe fica no aguardo de seu retorno.
        END;

    echo $conteudoEmail . PHP_EOL;
}

geraEmail(usuario: 'Gabriel');

// heredoc é parecido com as "" podendo utilizar variáveis no conteúdo
// nowdoc é parecido com a '' não podendo utilizar as variáveis


