<?php

namespace App\Components\OpenApiSchema\Models;

class ReferenceObject
{
    private string $ref; // todo: convert $

    /**
     * @param string $ref
     */
    public function __construct(string $ref)
    {
        $this->ref = $ref;
    }

    /**
     * @return string
     */
    public function getRef(): string
    {
        return $this->ref;
    }

    /**
     * @param string $ref
     */
    public function setRef(string $ref): void
    {
        $this->ref = $ref;
    }
}