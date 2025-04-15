<?php

namespace KaraTrack\Modelo;

class Sensei extends Karateca
{
    public function __construct(
        string $nome,
        int $anoNascimento,
        Faixa $faixa,
        Dojo $dojo
    ) {
        parent::__construct($nome, $anoNascimento, $faixa, $dojo);
    }
}
