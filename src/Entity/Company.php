<?php

namespace App\Entity;

use App\Enum\VerificationStatus;
use App\Repository\CompanyRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: CompanyRepository::class)]
#[Broadcast]
class Company
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $userID = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $location = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $contactPerson = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $contactPhone = null;

    #[ORM\Column(length: 255)]
    private ?string $registrationNumber = null;

    #[ORM\Column(nullable: true, enumType: VerificationStatus::class)]
    private ?VerificationStatus $verificationStatus = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $verificationDate = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $createdAt = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $updatedAt = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getUserID(): ?int
    {
        return $this->userID;
    }

    public function setUserID(int $userID): static
    {
        $this->userID = $userID;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(?string $location): static
    {
        $this->location = $location;

        return $this;
    }

    public function getContactPerson(): ?string
    {
        return $this->contactPerson;
    }

    public function setContactPerson(?string $contactPerson): static
    {
        $this->contactPerson = $contactPerson;

        return $this;
    }

    public function getContactPhone(): ?string
    {
        return $this->contactPhone;
    }

    public function setContactPhone(?string $contactPhone): static
    {
        $this->contactPhone = $contactPhone;

        return $this;
    }

    public function getRegistrationNumber(): ?string
    {
        return $this->registrationNumber;
    }

    public function setRegistrationNumber(string $registrationNumber): static
    {
        $this->registrationNumber = $registrationNumber;

        return $this;
    }

    public function getVerificationStatus(): ?VerificationStatus
    {
        return $this->verificationStatus;
    }

    public function setVerificationStatus(?VerificationStatus $verificationStatus): static
    {
        $this->verificationStatus = $verificationStatus;

        return $this;
    }

    public function getVerificationDate(): ?\DateTimeInterface
    {
        return $this->verificationDate;
    }

    public function setVerificationDate(?\DateTimeInterface $verificationDate): static
    {
        $this->verificationDate = $verificationDate;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeInterface $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
