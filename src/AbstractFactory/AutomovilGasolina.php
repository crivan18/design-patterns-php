<?php

namespace Src\AbstractFactory;

class AutomovilGasolina extends Automovil
{
    public function __construct(string $modelo, string $color, int $potencia, float $espacio)
    {
        parent::__construct($modelo, $color, $potencia, $espacio);
    }

    public function mostrarCaracteristicas(): void
    {
        $msg = "Automovil de gasolina\n
            Modelo: {$this->modelo}\n
            Color: {$this->color}\n
            Potencia: {$this->potencia}\n
            Espacio: {$this->espacio}";
        print($msg);
    }
}