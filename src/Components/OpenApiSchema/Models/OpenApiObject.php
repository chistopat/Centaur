<?php

namespace App\Components\OpenApiSchema\Models;

use ArrayObject;
use Symfony\Component\Validator\Constraints as Assert;

class OpenApiObject
{

    /**
     * @var string
     * @Assert\NotBlank
     */
    private string $openapi;

    /**
     * @var InfoObject
     * @Assert\Valid
     */
    private InfoObject $info;

    /**
     * @var ServerObject[]|null
     * @Assert\Valid
     */
    private ?array $servers;

    /**
     * @var ArrayObject<string, PathItemObject>
     * @Assert\Valid // todo: кастомный валидатор слешей
     */
    private ArrayObject $paths;

    /**
     * @var array | null
     */
    private ?array $components;

    /**
     * @var array | null
     */
    private ?array $security; // todo: support later

    /**
     * @var TagObject[] | null
     */
    private ?array $tags;

    /**
     * @var ExternalDocsObject | null
     */
    private ?ExternalDocsObject $externalDocs;

    /**
     * @param string $openapi
     * @param InfoObject $info
     * @param array $paths
     */
    public function __construct(string $openapi, InfoObject $info, array $paths)
    {
        $this->openapi = $openapi;
        $this->info = $info;
        $this->paths = new ArrayObject($paths);
        $this->servers = null;
        $this->components = null;
        $this->security = null;
        $this->tags = null;
        $this->externalDocs = null;
    }

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
     * @return ServerObject[]|null
     */
    public function getServers(): ?array
    {
        return $this->servers;
    }

    /**
     * @param ServerObject[]|null $servers
     */
    public function setServers(?array $servers): void
    {
        $this->servers = $servers;
    }

    /**
     * @return ArrayObject<string, PathItemObject>
     */
    public function getPaths(): ArrayObject
    {
        return $this->paths;
    }

    /**
     * @param array<string, PathItemObject> $paths
     */
    public function setPaths(array $paths): void
    {
        $this->paths = new ArrayObject($paths);
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
     * @return TagObject[]|null
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    /**
     * @param TagObject[]|null $tags
     */
    public function setTags(?array $tags): void
    {
        $this->tags = $tags;
    }

    /**
     * @return ExternalDocsObject|null
     */
    public function getExternalDocs(): ?array
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