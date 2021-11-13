<?php

namespace App\Components\OpenApiSchema\Models;

use Symfony\Component\Validator\Constraints as Assert;

class ContactObject
{

    /**
     * @var string|null
     * @Assert\NotBlank
     */
    private ?string $name;

    /**
     * @var string|null
     * @Assert\Url(
     *     message = "The url '{{ value }}' is not valid string"
     * )
     */
    private ?string $url;

    /**
     * @var string|null
     * @Assert\Email(
     *     message = "The email '{{ value }}' is not valid string"
     * )
     */
    private ?string $email;

    /**
     * @param string|null $name
     * @param string|null $url
     * @param string|null $email
     */
    public function __construct(?string $name, ?string $url, ?string $email)
    {
        $this->name = $name;
        $this->url = $url;
        $this->email = $email;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void
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

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }
}