<?php

namespace App\Entity;

use App\Repository\CompletionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: CompletionRepository::class)]
#[Broadcast]
class Completion
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $workerID = null;

    #[ORM\Column(nullable: true)]
    private ?int $courseID = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $completionDate = null;

    #[ORM\Column(nullable: true)]
    private ?bool $passed = null;

    #[ORM\Column(nullable: true)]
    private ?bool $certificateIssued = null;

    #[ORM\Column(nullable: true)]
    private ?float $score = null;

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

    public function getCourseID(): ?int
    {
        return $this->courseID;
    }

    public function setCourseID(?int $courseID): static
    {
        $this->courseID = $courseID;

        return $this;
    }

    public function getCompletionDate(): ?\DateTimeInterface
    {
        return $this->completionDate;
    }

    public function setCompletionDate(?\DateTimeInterface $completionDate): static
    {
        $this->completionDate = $completionDate;

        return $this;
    }

    public function isPassed(): ?bool
    {
        return $this->passed;
    }

    public function setPassed(?bool $passed): static
    {
        $this->passed = $passed;

        return $this;
    }

    public function isCertificateIssued(): ?bool
    {
        return $this->certificateIssued;
    }

    public function setCertificateIssued(?bool $certificateIssued): static
    {
        $this->certificateIssued = $certificateIssued;

        return $this;
    }

    public function getScore(): ?float
    {
        return $this->score;
    }

    public function setScore(?float $score): static
    {
        $this->score = $score;

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

