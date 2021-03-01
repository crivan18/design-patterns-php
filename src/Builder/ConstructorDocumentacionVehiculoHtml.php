<?php

namespace Src\Builder;

class ConstructorDocumentacionVehiculoHtml extends ConstructorDocumentacionVehiculo
{
    public function __construct()
    {
        $this->documentacion = new DocumentacionHtml;
    }

    public function construyeSolicitudPedido(string $nombreCliente): void
    {
        $documento = "<html>
                Solicitud de pedido\nCliente: {$nombreCliente}
            </html>";
        $this->documentacion->agregaDocumento($documento);
    }

    public function construyeSolicitudMatricula(string $nombreSolicitante): void
    {
        $documento = "<html>
                Solicitud de matriculacion\nSolicitante: {$nombreSolicitante}
            </html>";
        $this->documentacion->agregaDocumento($documento);
    }
}