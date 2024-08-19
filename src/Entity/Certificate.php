<?php

namespace App\Entity;

use App\Repository\CertificateRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: CertificateRepository::class)]
#[Broadcast]
class Certificate
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $completionID = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $certificateURL = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $issuedAT = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getCompletionID(): ?int
    {
        return $this->completionID;
    }

    public function setCompletionID(int $completionID): static
    {
        $this->completionID = $completionID;

        return $this;
    }

    public function getCertificateURL(): ?string
    {
        return $this->certificateURL;
    }

    public function setCertificateURL(?string $certificateURL): static
    {
        $this->certificateURL = $certificateURL;

        return $this;
    }

    public function getIssuedAT(): ?\DateTimeInterface
    {
        return $this->issuedAT;
    }

    public function setIssuedAT(?\DateTimeInterface $issuedAT): static
    {
        $this->issuedAT = $issuedAT;

        return $this;
    }
}
