<?php

namespace Src\Builder;

class DocumentacionHtml extends Documentacion
{
    public function agregaDocumento(string $documento): void
    {
        if ($documento) {
            $this->documentos[] = $documento;
        }
    }

    public function imprime(): void
    {
        print("Documentacion HTML\n");
        foreach ($this->documentos as $documento) {
            print("{$documento}\n");
        }
    }
}