<?php

namespace App\Components\OpenApiSchema\Models;

class PathItemObject
{
    /**
     * @var string|null
     */
    private ?string $ref; //todo: convert from '$ref' to 'ref'

    /**
     * @var string|null
     */
    private ?string $summary;

    /**
     * @var string|null
     */
    private ?string $description;

    /**
     * @var OperationObject|null
     */
    private ?OperationObject $get; //todo: convert name, remove ugly getGet methods

    /**
     * @var OperationObject|null
     */
    private ?OperationObject $put;

    /**
     * @var OperationObject|null
     */
    private ?OperationObject $post;

    /**
     * @var OperationObject|null
     */
    private ?OperationObject $delete;

    /**
     * @var OperationObject|null
     */
    private ?OperationObject $options;

    /**
     * @var OperationObject|null
     */
    private ?OperationObject $head;

    /**
     * @var OperationObject|null
     */
    private ?OperationObject $patch;

    /**
     * @var OperationObject|null
     */
    private ?OperationObject $trace;

    /**
     * @var ParameterObject|ReferenceObject|null
     */
    private ReferenceObject|ParameterObject|null $parameters;


    public function __construct()
    {
        $this->ref = null;
        $this->summary = null;
        $this->description = null;
        $this->get = null;
        $this->put = null;
        $this->post = null;
        $this->delete = null;
        $this->options = null;
        $this->head = null;
        $this->patch = null;
        $this->trace = null;
        $this->parameters = null;
    }

    /**
     * @return string|null
     */
    public function getRef(): ?string
    {
        return $this->ref;
    }

    /**
     * @param string|null $ref
     */
    public function setRef(?string $ref): void
    {
        $this->ref = $ref;
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
     * @return OperationObject|null
     */
    public function getGet(): ?OperationObject
    {
        return $this->get;
    }

    /**
     * @param OperationObject|null $get
     */
    public function setGet(?OperationObject $get): void
    {
        $this->get = $get;
    }

    /**
     * @return OperationObject|null
     */
    public function getPut(): ?OperationObject
    {
        return $this->put;
    }

    /**
     * @param OperationObject|null $put
     */
    public function setPut(?OperationObject $put): void
    {
        $this->put = $put;
    }

    /**
     * @return OperationObject|null
     */
    public function getPost(): ?OperationObject
    {
        return $this->post;
    }

    /**
     * @param OperationObject|null $post
     */
    public function setPost(?OperationObject $post): void
    {
        $this->post = $post;
    }

    /**
     * @return OperationObject|null
     */
    public function getDelete(): ?OperationObject
    {
        return $this->delete;
    }

    /**
     * @param OperationObject|null $delete
     */
    public function setDelete(?OperationObject $delete): void
    {
        $this->delete = $delete;
    }

    /**
     * @return OperationObject|null
     */
    public function getOptions(): ?OperationObject
    {
        return $this->options;
    }

    /**
     * @param OperationObject|null $options
     */
    public function setOptions(?OperationObject $options): void
    {
        $this->options = $options;
    }

    /**
     * @return OperationObject|null
     */
    public function getHead(): ?OperationObject
    {
        return $this->head;
    }

    /**
     * @param OperationObject|null $head
     */
    public function setHead(?OperationObject $head): void
    {
        $this->head = $head;
    }

    /**
     * @return OperationObject|null
     */
    public function getPatch(): ?OperationObject
    {
        return $this->patch;
    }

    /**
     * @param OperationObject|null $patch
     */
    public function setPatch(?OperationObject $patch): void
    {
        $this->patch = $patch;
    }

    /**
     * @return OperationObject|null
     */
    public function getTrace(): ?OperationObject
    {
        return $this->trace;
    }

    /**
     * @param OperationObject|null $trace
     */
    public function setTrace(?OperationObject $trace): void
    {
        $this->trace = $trace;
    }

    /**
     * @return ParameterObject|ReferenceObject|null
     */
    public function getParameters(): ParameterObject|ReferenceObject|null
    {
        return $this->parameters;
    }

    /**
     * @param ParameterObject|ReferenceObject|null $parameters
     */
    public function setParameters(ParameterObject|ReferenceObject|null $parameters): void
    {
        $this->parameters = $parameters;
    }
}