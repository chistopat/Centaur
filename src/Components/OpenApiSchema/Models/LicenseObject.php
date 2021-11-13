<?php

namespace App\Components\OpenApiSchema\Models;

use Symfony\Component\Validator\Constraints as Assert;

class LicenseObject
{
    /**
     * @var string
     * @Assert\NotBlank
     */
    private string $name;
    /**
     * @var string|null
     * @Assert\Url(
     *     message = "The url '{{ value }}' is not valid string"
     * )
     */
    private ?string $url;

    /**
     * @param string $name
     * @param string|null $url
     */
    public function __construct(string $name, ?string $url)
    {
        $this->name = $name;
        $this->url = $url;
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
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @param string|null $url
     */
    public function setUrl(?string $url): void
    {
        $this->url = $url;
    }
}