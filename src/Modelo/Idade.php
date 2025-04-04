<?php

namespace KaraTrack\Modelo;

use KaraTrack\Exception\AnoInvalidoException;

trait Idade
{
    private int $anoNascimento;

    /**
     * @throws AnoInvalidoException Se o ano for negativo
     */

    public function validarAno(int $anoNascimento): void
    {
        if ($anoNascimento < 0) {
            throw new AnoInvalidoException;
        }

        $this->anoNascimento = $anoNascimento;
    }

    public function calcularIdade(): int
    {
        $idade = 2025 - $this->anoNascimento;
        return $idade;
    }
}