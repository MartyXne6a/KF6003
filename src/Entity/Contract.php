<?php

namespace App\Entity;

use App\Enum\ContractType;
use App\Enum\PartyType;
use App\Repository\ContractRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: ContractRepository::class)]
#[Broadcast]
class Contract
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $partyID = null;

    #[ORM\Column(enumType: PartyType::class)]
    private ?PartyType $partyType = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $startDate = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $endDate = null;

    #[ORM\Column(nullable: true, enumType: ContractType::class)]
    private ?ContractType $type = null;

    #[ORM\Column(nullable: true)]
    private ?float $hourlyRate = null;

    #[ORM\Column(nullable: true)]
    private ?float $serviceFee = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $currency = null;

    #[ORM\Column(nullable: true)]
    private ?array $benefits = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $termsAndConditions = null;

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

    public function getPartyID(): ?int
    {
        return $this->partyID;
    }

    public function setPartyID(int $partyID): static
    {
        $this->partyID = $partyID;

        return $this;
    }

    public function getPartyType(): ?PartyType
    {
        return $this->partyType;
    }

    public function setPartyType(PartyType $partyType): static
    {
        $this->partyType = $partyType;

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

    public function getType(): ?ContractType
    {
        return $this->type;
    }

    public function setType(?ContractType $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getHourlyRate(): ?float
    {
        return $this->hourlyRate;
    }

    public function setHourlyRate(?float $hourlyRate): static
    {
        $this->hourlyRate = $hourlyRate;

        return $this;
    }

    public function getServiceFee(): ?float
    {
        return $this->serviceFee;
    }

    public function setServiceFee(?float $serviceFee): static
    {
        $this->serviceFee = $serviceFee;

        return $this;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(?string $currency): static
    {
        $this->currency = $currency;

        return $this;
    }

    public function getBenefits(): ?array
    {
        return $this->benefits;
    }

    public function setBenefits(?array $benefits): static
    {
        $this->benefits = $benefits;

        return $this;
    }

    public function getTermsAndConditions(): ?string
    {
        return $this->termsAndConditions;
    }

    public function setTermsAndConditions(?string $termsAndConditions): static
    {
        $this->termsAndConditions = $termsAndConditions;

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
