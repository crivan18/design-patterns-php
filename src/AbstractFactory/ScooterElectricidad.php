<?php

namespace Src\AbstractFactory;

class ScooterElectricidad extends Scooter
{
    public function __construct(string $modelo, string $color, int $potencia)
    {
        parent::__construct($modelo, $color, $potencia);
    }

    public function mostrarCaracteristicas(): void
    {
        $msg = "Scooter electrico\n
            Modelo: {$this->modelo}\n
            Color: {$this->color}\n
            Potencia: {$this->potencia}";
        print($msg);
    }
}