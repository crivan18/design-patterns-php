<?php

namespace Src\AbstractFactory;

abstract class Automovil
{
    protected string $modelo;
    protected string $color;
    protected int $potencia;
    protected float $espacio;

    protected function __construct(string $modelo, string $color, int $potencia, float $espacio)
    {
        $this->modelo = $modelo;
        $this->color = $color;
        $this->potencia = $potencia;
        $this->espacio = $espacio;
    }

    protected abstract function mostrarCaracteristicas(): void;
}