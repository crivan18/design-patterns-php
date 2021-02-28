<?php

namespace Src\AbstractFactory;

class FabricaVehiculoGasolina implements FabricaVehiculo
{
    public function creaAutomovil(string $modelo, string $color, int $potencia, float $espacio): Automovil
    {
        return new AutomovilGasolina(
            $modelo,
            $color,
            $potencia,
            $espacio
        );
    }

    public function creaScooter(string $modelo, string $color, int $potencia): Scooter
    {
        return new ScooterGasolina(
            $modelo,
            $color,
            $potencia
        );
    }
}