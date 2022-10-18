<?php

class Conta {

    public string $cpf;
    public string $titular;
    private float $saldo = 0.00;

    public function __construct(string $cpf, string $titular)
    {
        $this-> cpf = $cpf;
        $this-> titular = $titular;
    }

    public function setSaldo(float $valor)
    {
        $this->saldo += $valor;
    }


    public function getSaldo()
    {
        return $this->saldo;
    }
}

$fernanda = new Conta(" ", " ");

$fernanda->cpf = '111.222.333-44';
$fernanda->titular = 'Fernanda';

$flavio = new Conta('222.333.444.-55', 'Flávio');
$flavio->setSaldo(100.00);


echo "Conta = { Titular: {$fernanda->titular}, cpf: {$fernanda->cpf}, saldo: {$fernanda->getSaldo()}}" . PHP_EOL;
echo "Conta = { Titular: {$flavio->titular}, cpf: {$flavio->cpf}, saldo: {$flavio->getSaldo()}}" . PHP_EOL;

//echo gettype($fernanda) . PHP_EOL;        // Object
//echo get_class($fernanda) . PHP_EOL;      // Conta
