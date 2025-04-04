<?php

namespace KaraTrack\Exception;

class AnoInvalidoException extends \InvalidArgumentException
{
    public function __construct()
    {
        parent::__construct('O ano precisa ser positivo');
    }
}