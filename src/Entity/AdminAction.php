<?php

namespace App\Entity;

use App\Enum\ActionType;
use App\Repository\AdminActionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: AdminActionRepository::class)]
#[Broadcast]
class AdminAction
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $adminID = null;

    #[ORM\Column]
    private ?int $reportID = null;

    #[ORM\Column(nullable: true, enumType: ActionType::class)]
    private ?ActionType $type = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $details = null;

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

    public function getAdminID(): ?int
    {
        return $this->adminID;
    }

    public function setAdminID(int $adminID): static
    {
        $this->adminID = $adminID;

        return $this;
    }

    public function getReportID(): ?int
    {
        return $this->reportID;
    }

    public function setReportID(int $reportID): static
    {
        $this->reportID = $reportID;

        return $this;
    }

    public function getType(): ?ActionType
    {
        return $this->type;
    }

    public function setType(?ActionType $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getDetails(): ?string
    {
        return $this->details;
    }

    public function setDetails(?string $details): static
    {
        $this->details = $details;

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
