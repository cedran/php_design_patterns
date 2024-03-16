<?php

namespace Alura\DesignPattern;

class Orcamento
{
    public float $valor;
    public int $quantidadeItens;

    public function __construct(float $valor, int $quantidadeItens)
    {
        $this->valor = $valor;
        $this->quantidadeItens = $quantidadeItens;
    }
}