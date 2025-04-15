<?php

//require __DIR__ . "/src/Modelo/Karateca.php";
//require __DIR__ . "/src/Modelo/Faixa.php";
//require __DIR__ . "/src/Modelo/Dojo.php";
//require __DIR__ . "/src/Modelo/Aluno.php";
//require __DIR__ . "/src/Modelo/Sensei.php";

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
//echo "Faixa: " . $aluno->getFaixa() . " - Dojo: " . $aluno->getDojo() . PHP_EOL;