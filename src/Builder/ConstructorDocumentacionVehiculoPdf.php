<?php

namespace Src\Builder;

class ConstructorDocumentacionVehiculoPdf extends ConstructorDocumentacionVehiculo
{
    public function __construct()
    {
        $this->documentacion = new DocumentacionPdf;
    }

    public function construyeSolicitudPedido(string $nombreCliente): void
    {
        $documento = "<pdf>
                Solicitud de pedido\nCliente: {$nombreCliente}
            </pdf>";
        $this->documentacion->agregaDocumento($documento);
    }

    public function construyeSolicitudMatricula(string $nombreSolicitante): void
    {
        $documento = "<pdf>
                Solicitud de matriculacion\nSolicitante: {$nombreSolicitante}
            </pdf>";
        $this->documentacion->agregaDocumento($documento);
    }
}