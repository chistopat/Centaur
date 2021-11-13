<?php

namespace App\Components\OpenApiSchema\Models;

class ParameterObject
{
    /**
     * @var string //todo: special validator
     */
    private string $name;
    /**
     * @var string
     */
    private string $in; //todo: enum
    /**
     * @var bool
     */
    private bool $required;
    /**
     * @var string|null
     */
    private ?string $description;
    /**
     * @var bool|null
     */
    private ?bool $deprecated;
//    private ?bool $allowEmptyValue; todo: restrict empty values globally

    /**
     * @param string $name
     * @param string $in
     * @param bool $required
     */
    public function __construct(string $name, string $in, bool $required)
    {
        $this->name = $name;
        $this->in = $in;
        $this->required = $required;
        $this->description = null;
        $this->deprecated = null;
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
     * @return string
     */

    public function getIn(): string
    {
        return $this->in;
    }

    /**
     * @param string $in
     */
    public function setIn(string $in): void
    {
        $this->in = $in;
    }

    /**
     * @return bool
     */
    public function getRequired(): bool
    {
        return $this->required;
    }

    /**
     * @param bool $required
     */
    public function setRequired(bool $required): void
    {
        $this->required = $required;
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
}