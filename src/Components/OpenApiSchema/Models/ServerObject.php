<?php

namespace App\Components\OpenApiSchema\Models;

use Symfony\Component\Validator\Constraints as Assert;

class ServerObject
{
    /**
     * @var string
     * @Assert\Url(
     *     message = "The url '{{ value }}' is not valid string"
     * )
     */
    private string $url;

    /**
     * @var string | null
     * @Assert\NotBlank
     */
    private ?string $description;

//  private array $variables; todo: support server variables if require

    /**
     * @param string $url
     * @param string|null $description
     */
    public function __construct(string $url, ?string $description)
    {
        $this->url = $url;
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


}