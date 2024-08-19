<?php

namespace App\Entity;

use App\Enum\JobContractStatus;
use App\Repository\JobContractRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: JobContractRepository::class)]
#[Broadcast]
class JobContract
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $workerID = null;

    #[ORM\Column]
    private ?int $companyID = null;

    #[ORM\Column]
    private ?int $applicationID = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $startDate = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $endDate = null;

    #[ORM\Column(nullable: true)]
    private ?float $rate = null;

    #[ORM\Column(nullable: true, enumType: JobContractStatus::class)]
    private ?JobContractStatus $status = null;

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

    public function getCompanyID(): ?int
    {
        return $this->companyID;
    }

    public function setCompanyID(int $companyID): static
    {
        $this->companyID = $companyID;

        return $this;
    }

    public function getApplicationID(): ?int
    {
        return $this->applicationID;
    }

    public function setApplicationID(int $applicationID): static
    {
        $this->applicationID = $applicationID;

        return $this;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function setStartDate(?\DateTimeInterface $startDate): static
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->endDate;
    }

    public function setEndDate(?\DateTimeInterface $endDate): static
    {
        $this->endDate = $endDate;

        return $this;
    }

    public function getRate(): ?float
    {
        return $this->rate;
    }

    public function setRate(?float $rate): static
    {
        $this->rate = $rate;

        return $this;
    }

    public function getStatus(): ?JobContractStatus
    {
        return $this->status;
    }

    public function setStatus(?JobContractStatus $status): static
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
