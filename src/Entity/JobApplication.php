<?php

namespace App\Entity;

use App\Enum\ApplicationStatus;
use App\Repository\JobApplicationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: JobApplicationRepository::class)]
#[Broadcast]
class JobApplication
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $workerID = null;

    #[ORM\Column(nullable: true)]
    private ?int $jobID = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(nullable: true, enumType: ApplicationStatus::class)]
    private ?ApplicationStatus $status = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $reviewDate = null;

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

    public function getJobID(): ?int
    {
        return $this->jobID;
    }

    public function setJobID(?int $jobID): static
    {
        $this->jobID = $jobID;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getStatus(): ?ApplicationStatus
    {
        return $this->status;
    }

    public function setStatus(?ApplicationStatus $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getReviewDate(): ?\DateTimeInterface
    {
        return $this->reviewDate;
    }

    public function setReviewDate(?\DateTimeInterface $reviewDate): static
    {
        $this->reviewDate = $reviewDate;

        return $this;
    }
}
