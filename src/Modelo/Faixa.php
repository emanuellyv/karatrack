<?php

namespace KaraTrack\Modelo;

enum Faixa
{
    case Branca;
    case Amarela;
    case Laranja;
    case Verde;
    case Roxa;
    case Marrom;
    case Preta;
    case Mestre;

    public function podeLutar()
    {
        if ($this === Faixa::Laranja || $this === Faixa::Verde || $this === Faixa::Roxa || $this === Faixa::Marrom) {
            return "Pode lutar contra faixas coloridas";
        } elseif ($this === Faixa::Preta) {
            return "Pode lutar apenas contra faixas pretas";
        } elseif ($this === Faixa::Mestre) {
            return "Pode lutar apenas contra mestres";
        }
    }
}
