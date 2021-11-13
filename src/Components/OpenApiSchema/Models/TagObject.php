<?php

namespace App\Components\OpenApiSchema\Models;

class TagObject
{
    /**
     * @var string
     */
    private string $name;

    /**
     * @var string|null
     */
    private ?string $description;

    /**
     * @var ExternalDocsObject|null
     */
    private ?ExternalDocsObject $externalDocs;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
        $this->description = null;
        $this->externalDocs = null;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return ExternalDocsObject|null
     */
    public function getExternalDocs(): ?ExternalDocsObject
    {
        return $this->externalDocs;
    }

    /**
     * @param ExternalDocsObject|null $externalDocs
     */
    public function setExternalDocs(?ExternalDocsObject $externalDocs): void
    {
        $this->externalDocs = $externalDocs;
    }
}
