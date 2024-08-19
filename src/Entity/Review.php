<?php

namespace App\Entity;

use App\Enum\PartyType;
use App\Repository\ReviewRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: ReviewRepository::class)]
#[Broadcast]
class Review
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $reviewerID = null;

    #[ORM\Column]
    private ?int $entityID = null;

    #[ORM\Column(nullable: true, enumType: PartyType::class)]
    private ?PartyType $entityType = null;

    #[ORM\Column(nullable: true)]
    private ?float $rating = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $comments = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getReviewerID(): ?int
    {
        return $this->reviewerID;
    }

    public function setReviewerID(int $reviewerID): static
    {
        $this->reviewerID = $reviewerID;

        return $this;
    }

    public function getEntityID(): ?int
    {
        return $this->entityID;
    }

    public function setEntityID(int $entityID): static
    {
        $this->entityID = $entityID;

        return $this;
    }

    public function getEntityType(): ?PartyType
    {
        return $this->entityType;
    }

    public function setEntityType(?PartyType $entityType): static
    {
        $this->entityType = $entityType;

        return $this;
    }

    public function getRating(): ?float
    {
        return $this->rating;
    }

    public function setRating(?float $rating): static
    {
        $this->rating = $rating;

        return $this;
    }

    public function getComments(): ?string
    {
        return $this->comments;
    }

    public function setComments(?string $comments): static
    {
        $this->comments = $comments;

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
}
