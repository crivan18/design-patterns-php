<?php

namespace Src\Builder;

abstract class ConstructorDocumentacionVehiculo
{
    protected Documentacion $documentacion;

    protected abstract function construyeSolicitudPedido(string $nombreCliente): void;

    protected abstract function construyeSolicitudMatricula(string $nombreSolicitante): void;

    public function resultado(): Documentacion
    {
        return $this->documentacion;
    }
}