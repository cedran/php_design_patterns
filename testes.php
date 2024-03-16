<?php

use Alura\DesignPattern\CalculadoraDeImpostos as CalculadoraDeImpostosAlias;
use Alura\DesignPattern\Impostos\Icms;
use Alura\DesignPattern\Orcamento;

require 'vendor/autoload.php';

$calculadora = new CalculadoraDeImpostosAlias();
$orcamento = new Orcamento();
$orcamento->valor = 100;

echo $calculadora->calcula($orcamento, new Icms());