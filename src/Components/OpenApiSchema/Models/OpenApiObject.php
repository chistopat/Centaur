<?php

namespace App\Components\OpenApiSchema\Models;

class OpenApiObject
{
    /**
     * @var string
     */
    private string $openapi;
    /**
     * @var array
     */
    private array $info; // todo: InfoObject // required
    /**
     * @var array
     */
    private array $servers;
    /**
     * @var array
     */
    private array $path; // required
    /**
     * @var array
     */
    private array $components;
    /**
     * @var array
     */
    private array $security;
    /**
     * @var array
     */
    private array $tags;
    /**
     * @var array
     */
    private array $externalDocs;

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
     * @return array
     */
    public function getInfo(): array
    {
        return $this->info;
    }

    /**
     * @param array $info
     */
    public function setInfo(array $info): void
    {
        $this->info = $info;
    }

    /**
     * @return array
     */
    public function getServers(): array
    {
        return $this->servers;
    }

    /**
     * @param array $servers
     */
    public function setServers(array $servers): void
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
     * @return array
     */
    public function getComponents(): array
    {
        return $this->components;
    }

    /**
     * @param array $components
     */
    public function setComponents(array $components): void
    {
        $this->components = $components;
    }

    /**
     * @return array
     */
    public function getSecurity(): array
    {
        return $this->security;
    }

    /**
     * @param array $security
     */
    public function setSecurity(array $security): void
    {
        $this->security = $security;
    }

    /**
     * @return array
     */
    public function getTags(): array
    {
        return $this->tags;
    }

    /**
     * @param array $tags
     */
    public function setTags(array $tags): void
    {
        $this->tags = $tags;
    }

    /**
     * @return array
     */
    public function getExternalDocs(): array
    {
        return $this->externalDocs;
    }

    /**
     * @param array $externalDocs
     */
    public function setExternalDocs(array $externalDocs): void
    {
        $this->externalDocs = $externalDocs;
    }

}