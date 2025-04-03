<?php

enum Dojo {
    case DePaula;
    case Simioni;
    case Scorpion;
    case Sippel;
}

/* Modelagem de classe para o futuro
class Dojo
{
    public function __construct(
        public readonly string $nome,
        public readonly string $anoAbertura,
        public int $qtdeAlunos,
        public Aluno $alunos,
        public Sensei $senseis
    )
    {
        
    }
}
*/