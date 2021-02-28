<?php

namespace Src\AbstractFactory;

class Catalogo
{
    private const N_AUTOS = 3;
    private const N_SCOOTERS = 2;

    public static function crearFabrica(int $eleccion): void
    {
        $autos = [];
        $scooters = [];
        $fabrica = null;
        if ($eleccion === 1) {
            $fabrica = new FabricaVehiculoElectricidad;
        } else {
            $fabrica = new FabricaVehiculoGasolina;
        }
        for ($i = 0; $i < self::N_AUTOS; $i++) {
            $autos[] = $fabrica->creaAutomovil('Estandar', 'Amarillo', 6 + $i, 3.2);
        }
        for ($i = 0; $i < self::N_SCOOTERS; $i++) {
            $scooters[] = $fabrica->creaScooter('clasico', 'rojo', 2 + $i);
        }
        foreach ($autos as $auto) {
            print("{$auto->mostrarCaracteristicas()}\n");
        }
        foreach ($scooters as $scooter) {
            print("{$scooter->mostrarCaracteristicas()}\n");
        }
    }
}