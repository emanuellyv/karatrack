<?php

require __DIR__ . "/src/Modelo/Karateca.php";
require __DIR__ . "/src/Modelo/Faixa.php";
require __DIR__ . "/src/Modelo/Dojo.php";
require __DIR__ . "/src/Modelo/Aluno.php";

$aluno = new Aluno(
    'Emanuelly Valenga',
    2002,
    Faixa::Preta,
    Dojo::DePaula
);

var_dump($aluno);

