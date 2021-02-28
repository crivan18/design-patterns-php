<?php

namespace Src\AbstractFactory;

class FabricaVehiculoElectricidad implements FabricaVehiculo
{
    public function creaAutomovil(string $modelo, string $color, int $potencia, float $espacio): Automovil
    {
        return new AutomovilElectricidad(
            $modelo, 
            $color, 
            $potencia, 
            $espacio
        );
    }

    public function creaScooter(string $modelo, $color, int $potencia): Scooter
    {
        return new ScooterElectricidad(
            $modelo, 
            $color, 
            $potencia
        );
    }
}