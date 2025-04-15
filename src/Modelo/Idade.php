<?php

namespace KaraTrack\Modelo;

use KaraTrack\Exception\AnoInvalidoException;

trait Idade
{
    private int $ano;

    /**
     * @throws AnoInvalidoException Se o ano for negativo
     */

    public function validarAno(int $ano): void
    {
        if ($ano < 0) {
            throw new AnoInvalidoException();
        }

        $this->ano = $ano;
    }

    public function calcularIdade(): int
    {
        $idade = 2025 - $this->ano;
        return $idade;
    }
}
