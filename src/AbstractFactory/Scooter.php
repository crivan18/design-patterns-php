<?php

namespace Src\AbstractFactory;

abstract class Scooter
{
    protected string $modelo;
    protected string $color;
    protected int $potencia;

    protected function __construct(string $modelo, string $color, int $potencia)
    {
        $this->modelo = $modelo;
        $this->color = $color;
        $this->potencia = $potencia;
    }

    protected abstract function mostrarCaracteristicas(): void;
}
