<?php

namespace App\Components\OpenApiSchema\Models;

use Symfony\Component\Validator\Constraints as Assert;


class OpenApiObject
{
    /**
     * @var string
     */
    private string $openapi;
    /**
     * @var InfoObject | null
     * @Assert\Valid
     */
    private ?InfoObject $info;
    /**
     * @var array | null
     */
    private ?array $servers;
    /**
     * @var array
     */
    private array $path; // required
    /**
     * @var array | null
     */
    private ?array $components;
    /**
     * @var array | null
     */
    private ?array $security;
    /**
     * @var array | null
     */
    private ?array $tags;
    /**
     * @var array | null
     */
    private ?array $externalDocs;

    /**
     * @return string
     */
    public function getOpenapi(): string
    {
        return $this->openapi;
    }

    /**
     * @param string $openapi
     */
    public function setOpenapi(string $openapi): void
    {
        $this->openapi = $openapi;
    }

    /**
     * @return InfoObject|null
     */
    public function getInfo(): ?InfoObject
    {
        return $this->info;
    }

    /**
     * @param InfoObject|null $info
     */
    public function setInfo(?InfoObject $info): void
    {
        $this->info = $info;
    }

    /**
     * @return array|null
     */
    public function getServers(): ?array
    {
        return $this->servers;
    }

    /**
     * @param array|null $servers
     */
    public function setServers(?array $servers): void
    {
        $this->servers = $servers;
    }

    /**
     * @return array
     */
    public function getPath(): array
    {
        return $this->path;
    }

    /**
     * @param array $path
     */
    public function setPath(array $path): void
    {
        $this->path = $path;
    }

    /**
     * @return array|null
     */
    public function getComponents(): ?array
    {
        return $this->components;
    }

    /**
     * @param array|null $components
     */
    public function setComponents(?array $components): void
    {
        $this->components = $components;
    }

    /**
     * @return array|null
     */
    public function getSecurity(): ?array
    {
        return $this->security;
    }

    /**
     * @param array|null $security
     */
    public function setSecurity(?array $security): void
    {
        $this->security = $security;
    }

    /**
     * @return array|null
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    /**
     * @param array|null $tags
     */
    public function setTags(?array $tags): void
    {
        $this->tags = $tags;
    }

    /**
     * @return array|null
     */
    public function getExternalDocs(): ?array
    {
        return $this->externalDocs;
    }

    /**
     * @param array|null $externalDocs
     */
    public function setExternalDocs(?array $externalDocs): void
    {
        $this->externalDocs = $externalDocs;
    }

}