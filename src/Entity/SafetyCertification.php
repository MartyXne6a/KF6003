<?php

namespace App\Entity;

use App\Enum\CertificationStatus;
use App\Repository\SafetyCertificationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: SafetyCertificationRepository::class)]
#[Broadcast]
class SafetyCertification
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $workerID = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $type = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $issuedBY = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $issuedDate = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $expiryDate = null;

    #[ORM\Column(nullable: true, enumType: CertificationStatus::class)]
    private ?CertificationStatus $status = null;

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

    public function getWorkerID(): ?int
    {
        return $this->workerID;
    }

    public function setWorkerID(int $workerID): static
    {
        $this->workerID = $workerID;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getIssuedBY(): ?string
    {
        return $this->issuedBY;
    }

    public function setIssuedBY(?string $issuedBY): static
    {
        $this->issuedBY = $issuedBY;

        return $this;
    }

    public function getIssuedDate(): ?\DateTimeInterface
    {
        return $this->issuedDate;
    }

    public function setIssuedDate(?\DateTimeInterface $issuedDate): static
    {
        $this->issuedDate = $issuedDate;

        return $this;
    }

    public function getExpiryDate(): ?\DateTimeInterface
    {
        return $this->expiryDate;
    }

    public function setExpiryDate(?\DateTimeInterface $expiryDate): static
    {
        $this->expiryDate = $expiryDate;

        return $this;
    }

    public function getStatus(): ?CertificationStatus
    {
        return $this->status;
    }

    public function setStatus(?CertificationStatus $status): static
    {
        $this->status = $status;

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
