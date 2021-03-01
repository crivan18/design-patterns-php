<?php

namespace Src\Builder;

class DocumentacionPdf extends Documentacion
{
    public function agregaDocumento(string $documento): void
    {
        if ($documento) {
            $this->documentos[] = $documento;
        }
    }

    public function imprime(): void
    {
        print("Documentacion PDF\n");
        foreach ($this->documentos as $documento) {
            print("{$documento}\n");
        }
    }
}