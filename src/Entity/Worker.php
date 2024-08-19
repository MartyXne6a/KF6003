<?php

namespace App\Entity;

use App\Enum\EmploymentStatus;
use App\Enum\VerificationStatus;
use App\Repository\WorkerRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: WorkerRepository::class)]
#[Broadcast]
class Worker
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $userID = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $employmentStatusDate = null;

    #[ORM\Column(nullable: true, enumType: EmploymentStatus::class)]
    private ?EmploymentStatus $employmentStatus = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $contactPhone = null;

    #[ORM\Column(nullable: true)]
    private ?float $salary = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $position = null;

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

    public function getEmploymentStatusDate(): ?\DateTimeInterface
    {
        return $this->employmentStatusDate;
    }

    public function setEmploymentStatusDate(?\DateTimeInterface $employmentStatusDate): static
    {
        $this->employmentStatusDate = $employmentStatusDate;

        return $this;
    }

    public function getEmploymentStatus(): ?EmploymentStatus
    {
        return $this->employmentStatus;
    }

    public function setEmploymentStatus(?EmploymentStatus $employmentStatus): static
    {
        $this->employmentStatus = $employmentStatus;

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

    public function getSalary(): ?float
    {
        return $this->salary;
    }

    public function setSalary(?float $salary): static
    {
        $this->salary = $salary;

        return $this;
    }

    public function getPosition(): ?string
    {
        return $this->position;
    }

    public function setPosition(?string $position): static
    {
        $this->position = $position;

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