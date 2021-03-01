<?php

namespace Src\Builder;

abstract class Documentacion
{
    protected array $documentos = [];

    protected abstract function agregaDocumento(string $documento): void;

    protected abstract function imprime(): void;
}