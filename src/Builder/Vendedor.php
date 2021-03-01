<?php

namespace Src\Builder;

class Vendedor
{
    private ConstructorDocumentacionVehiculo $constructor;

    public function __construct(ConstructorDocumentacionVehiculo $constructor)
    {
        $this->constructor = $constructor;
    }

    public function construye(string $nombreCliente): Documentacion
    {
        $this->constructor->construyeSolicitudPedido($nombreCliente);
        $this->constructor->construyeSolicitudMatricula($nombreCliente);
        return $this->constructor->resultado();
    }
}