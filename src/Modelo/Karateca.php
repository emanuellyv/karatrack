<?php

class Karateca
{
    
    public function __construct(
        public readonly string $nome,
        public readonly int $anoNascimento,
        public Faixa $faixa,
        public Dojo $dojo
    ) {
    }

    public function calcularIdade(): int
    {
        $idade = 2025 - $this->anoNascimento;
        return $idade;
    }
}