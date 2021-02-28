<?php

require_once __DIR__ . '/vendor/autoload.php';

use Src\AbstractFactory\Catalogo;

$prompt = readline("Desea crear Vehiculos electricos (1); Vehiculos de gasolina (2); Salir (3):");
$eleccion = (int) $prompt;
while ($eleccion !== 3) {
    Catalogo::crearFabrica($eleccion);
    $prompt = readline("Desea crear Vehiculos electricos (1); Vehiculos de gasolina (2); Salir (3):");
    $eleccion = (int) $prompt;
}
