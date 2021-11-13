<?php

namespace App\Components\OpenApiSchema\Models;

use ArrayObject;

class OperationObject
{
    /**
     * @var string[]|null
     */
    private ?array $tags;

    /**
     * @var string|null
     */
    private ?string $summary;

    /**
     * @var string|null
     */
    private ?string $description;

    /**
     * @var ExternalDocsObject|null
     */
    private ?ExternalDocsObject $externalDocs;

    /**
     * @var string|null
     */
    private ?string $operationId;

    /**
     * @var ParameterObject[] | null
     */
    private ?array $parameters;

    /**
     * @var RequestBodyObject|ReferenceObject|null
     */
    private RequestBodyObject|ReferenceObject|null $requestBody;

    /**
     * @var ArrayObject<int, ResponseObject> //todo: custom validator
     */
    private ArrayObject $responses;

    /**
     * @var ArrayObject<string, CallBackObject|ReferenceObject>|null
     */
    private ?ArrayObject $callbacks; // todo: support later

    /**
     * @var bool|null
     */
    private ?bool $deprecated;

    /**
     * @var SecurityRequirementObject|null
     */
    private ?SecurityRequirementObject $security; // todo: support later

    /**
     * @var ServerObject[]|null
     */
    private ?array $servers;

    /**
     * @param array $responses
     */
    public function __construct(array $responses)
    {
        $this->responses = new ArrayObject($responses);
        $this->tags = null;
        $this->summary = null;
        $this->description = null;
        $this->externalDocs = null;
        $this->operationId = null;
        $this->parameters = null;
        $this->requestBody = null;
        $this->callbacks = null;
        $this->deprecated = null;
        $this->security = null;
        $this->servers = null;
    }

    /**
     * @return string[]|null
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    /**
     * @param string[]|null $tags
     */
    public function setTags(?array $tags): void
    {
        $this->tags = $tags;
    }

    /**
     * @return string|null
     */
    public function getSummary(): ?string
    {
        return $this->summary;
    }

    /**
     * @param string|null $summary
     */
    public function setSummary(?string $summary): void
    {
        $this->summary = $summary;
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

    /**
     * @return string|null
     */
    public function getOperationId(): ?string
    {
        return $this->operationId;
    }

    /**
     * @param string|null $operationId
     */
    public function setOperationId(?string $operationId): void
    {
        $this->operationId = $operationId;
    }

    /**
     * @return ParameterObject[] | null
     */
    public function getParameters(): ?array
    {
        return $this->parameters;
    }

    /**
     * @param ParameterObject[] | null $parameters
     */
    public function setParameters(?array $parameters): void
    {
        $this->parameters = $parameters;
    }

    /**
     * @return ReferenceObject|RequestBodyObject|null
     */
    public function getRequestBody(): RequestBodyObject|ReferenceObject|null
    {
        return $this->requestBody;
    }

    /**
     * @param ReferenceObject|RequestBodyObject|null $requestBody
     */
    public function setRequestBody(RequestBodyObject|ReferenceObject|null $requestBody): void
    {
        $this->requestBody = $requestBody;
    }

    /**
     * @return ArrayObject<int, ResponseObject>
     */
    public function getResponses(): ArrayObject
    {
        return $this->responses;
    }

    /**
     * @param array $responses
     */
    public function setResponses(array $responses): void
    {
        $this->responses = new ArrayObject($responses);
    }

    /**
     * @return ArrayObject|null
     */
    public function getCallbacks(): ?ArrayObject
    {
        return $this->callbacks;
    }

    /**
     * @param ArrayObject|null $callbacks
     */
    public function setCallbacks(?ArrayObject $callbacks): void
    {
        $this->callbacks = $callbacks;
    }

    /**
     * @return bool|null
     */
    public function getDeprecated(): ?bool
    {
        return $this->deprecated;
    }

    /**
     * @param bool|null $deprecated
     */
    public function setDeprecated(?bool $deprecated): void
    {
        $this->deprecated = $deprecated;
    }

    /**
     * @return SecurityRequirementObject|null
     */
    public function getSecurity(): ?SecurityRequirementObject
    {
        return $this->security;
    }

    /**
     * @param SecurityRequirementObject|null $security
     */
    public function setSecurity(?SecurityRequirementObject $security): void
    {
        $this->security = $security;
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
}