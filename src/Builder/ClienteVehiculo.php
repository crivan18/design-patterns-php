<?php

namespace Src\Builder;

class ClienteVehiculo
{
    public static function ejecutar(): void
    {
        do {
            $prompt = readline("Desea generar -> Documentacion HTML (1); Documentacion PDF (2); Salir (3): ");
            $eleccion = (int) $prompt;
            $constructor = null;
            if ($eleccion === 1) {
                $constructor = new ConstructorDocumentacionVehiculoHtml;
            } else {
                $constructor = new ConstructorDocumentacionVehiculoPdf;
            }
            $vendedor = new Vendedor($constructor);
            $documentacion = $vendedor->construye('Ivan Huerta');
            $documentacion->imprime();
        } while ($eleccion !== 3);
    }
}