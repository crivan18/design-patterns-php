<?php

namespace Src\AbstractFactory;

interface FabricaVehiculo
{
    public function creaAutomovil(string $modelo, string $color, int $potencia, float $espacio): Automovil;

    public function creaScooter(string $modelo, string $color, int $potencia): Scooter;
}