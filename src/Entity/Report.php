<?php

namespace App\Entity;

use App\Enum\ReportStatus;
use App\Repository\ReportRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: ReportRepository::class)]
#[Broadcast]
class Report
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $reporterID = null;

    #[ORM\Column(nullable: true)]
    private ?int $reportedID = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $reason = null;

    #[ORM\Column(nullable: true, enumType: ReportStatus::class)]
    private ?ReportStatus $status = null;

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

    public function getReporterID(): ?int
    {
        return $this->reporterID;
    }

    public function setReporterID(?int $reporterID): static
    {
        $this->reporterID = $reporterID;

        return $this;
    }

    public function getReportedID(): ?int
    {
        return $this->reportedID;
    }

    public function setReportedID(?int $reportedID): static
    {
        $this->reportedID = $reportedID;

        return $this;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function setReason(?string $reason): static
    {
        $this->reason = $reason;

        return $this;
    }

    public function getStatus(): ?ReportStatus
    {
        return $this->status;
    }

    public function setStatus(?ReportStatus $status): static
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
