<?php

namespace App\Components\OpenApiSchema\Models;

use ArrayObject;

class ResponseObject
{
    /**
     * @var string
     */
    private string $description;
    /**
     * @var ArrayObject<string, MediaTypeObject>|null
     */
    private ?ArrayObject $content;

    // $headers todo
    // $links todo
    /**
     * @param string $description
     */
    public function __construct(string $description)
    {
        $this->description = $description;
        $this->content = null;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return ArrayObject<string, MediaTypeObject>|null
     */
    public function getContent(): ?ArrayObject
    {
        return $this->content;
    }

    /**
     * @param array|null $content
     */
    public function setContent(?array $content): void
    {
        $this->content = new ArrayObject($content);
    }
}