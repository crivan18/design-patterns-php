<?php

namespace Src\AbstractFactory;

class AutomovilElectricidad extends Automovil
{
    public function __construct(string $modelo, string $color, int $potencia, float $espacio)
    {
        parent::__construct($modelo, $color, $potencia, $espacio);
    }

    public function mostrarCaracteristicas(): void
    {
        $msg = "Automovil electrico\n
            Modelo: {$this->modelo}\n
            Color: {$this->color}\n
            Potencia: {$this->potencia}\n
            Espacio: {$this->espacio}";
        print($msg);
    }
}