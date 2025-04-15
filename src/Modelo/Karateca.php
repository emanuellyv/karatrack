<?php

namespace KaraTrack\Modelo;

abstract class Karateca
{
    use Idade;

    public function __construct(
        protected readonly string $nome,
        protected readonly int $anoNascimento,
        protected Faixa $faixa,
        protected Dojo $dojo
    ) {
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getFaixa(): Faixa
    {
        return $this->faixa;
    }

    public function getDojo(): Dojo
    {
        return $this->dojo;
    }

    public function getAnoNascimento(): int
    {
        return $this->anoNascimento;
    }
}
