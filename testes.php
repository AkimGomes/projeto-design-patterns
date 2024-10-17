<?php

require 'vendor/autoload.php';

use Alura\DesignPattern\CalculadoraDeDescontos;
use Alura\DesignPattern\CalculadoraDeImpostos;
use Alura\DesignPattern\Impostos\Icms;
use Alura\DesignPattern\Orcamento;

// $calculadora = new CalculadoraDeImpostos();

// $orcamento = new Orcamento();
// $orcamento->valor = 10;

// echo $calculadora->calcula($orcamento, new Icms());

$calculadora = new CalculadoraDeDescontos();

$orcamento = new Orcamento();
$orcamento->valor = 200;
$orcamento->quantidadeItens = 7;

echo $calculadora->calculaDescontos($orcamento);