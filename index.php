<?php

require_once 'vendor/autoload.php';

use KaraTrack\Modelo\Aluno;
use KaraTrack\Modelo\Sensei;
use KaraTrack\Modelo\Faixa;
use KaraTrack\Modelo\Dojo;

$aluno = new Aluno(
     'Emanuelly Valenga',
     2002,
     Faixa::Preta,
     Dojo::DePaula
);

$aluno->validarAno($aluno->getAnoNascimento());
echo "Aluno: " . $aluno->getNome() . " - " . $aluno->calcularIdade() . " anos" . PHP_EOL;
echo "Faixa: " . $aluno->getFaixa()->name . " - Dojo: " . $aluno->getDojo()->name . PHP_EOL;
echo "Campeonato de luta: " . $aluno->getFaixa()->podeLutar();