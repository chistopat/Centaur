<?php

namespace App\Components\OpenApiSchema\Models;

use Symfony\Component\Validator\Constraints as Assert;


class InfoObject
{
    /**
     * @param string $title
     * @param string $description
     * @param string $version
     */
    public function __construct(string $title, string $description, string $version)
    {
        $this->title = $title;
        $this->description = $description;
        $this->version = $version;
        $this->license = null;
        $this->contact = null;
        $this->termsOfService = null;

    }

    /**
     * @var string
     * @Assert\NotBlank
     */
    private string $title;

    /**
     * @var string
     * @Assert\NotBlank
     */
    private string $description;

    /**
     * @var string|null
     * @Assert\NotBlank
     */
    private ?string $termsOfService;

    /**
     * @var ContactObject|null
     * @Assert\Valid
     */
    private ?ContactObject $contact;

    /**
     * @var LicenseObject|null
     * @Assert\Valid

     */
    private ?LicenseObject $license;

    /**
     * @var string
     * @Assert\NotBlank
     */
    private string $version;

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
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
     * @return string|null
     */
    public function getTermsOfService(): ?string
    {
        return $this->termsOfService;
    }

    /**
     * @param string|null $termsOfService
     */
    public function setTermsOfService(?string $termsOfService): void
    {
        $this->termsOfService = $termsOfService;
    }

    /**
     * @return ContactObject|null
     */
    public function getContact(): ?ContactObject
    {
        return $this->contact;
    }

    /**
     * @param ContactObject|null $contact
     */
    public function setContact(?ContactObject $contact): void
    {
        $this->contact = $contact;
    }

    /**
     * @return LicenseObject|null
     */
    public function getLicense(): ?array
    {
        return $this->license;
    }

    /**
     * @param LicenseObject|null $license
     */
    public function setLicense(?LicenseObject $license): void
    {
        $this->license = $license;
    }

    /**
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * @param string $version
     */
    public function setVersion(string $version): void
    {
        $this->version = $version;
    }
}