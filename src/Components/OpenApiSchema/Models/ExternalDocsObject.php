<?php

namespace App\Components\OpenApiSchema\Models;

class ExternalDocsObject
{
    /**
     * @var string|null
     */
    private ?string $description;

    /**
     * @var string
     */
    private string $url;

    /**
     * @param string $url
     */
    public function __construct(string $url)
    {
        $this->description = null;
        $this->url = $url;
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
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl(string $url): void
    {
        $this->url = $url;
    }
}