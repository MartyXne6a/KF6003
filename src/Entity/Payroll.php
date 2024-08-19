<?php

namespace App\Entity;

use App\Enum\PayrollStatus;
use App\Repository\PayrollRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: PayrollRepository::class)]
#[Broadcast]
class Payroll
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $workerID = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $periodStart = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $periodEnd = null;

    #[ORM\Column(nullable: true)]
    private ?float $grossPay = null;

    #[ORM\Column(nullable: true)]
    private ?float $netPay = null;

    #[ORM\Column(nullable: true)]
    private ?float $taxHeld = null;

    #[ORM\Column(nullable: true)]
    private ?float $holidayPay = null;

    #[ORM\Column(nullable: true)]
    private ?float $sickLeavePay = null;

    #[ORM\Column(nullable: true)]
    private ?float $pensionContribution = null;

    #[ORM\Column(nullable: true)]
    private ?float $healthInsuranceDeduction = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $paymentDate = null;

    #[ORM\Column(nullable: true, enumType: PayrollStatus::class)]
    private ?PayrollStatus $status = null;

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

    public function getPeriodStart(): ?\DateTimeInterface
    {
        return $this->periodStart;
    }

    public function setPeriodStart(?\DateTimeInterface $periodStart): static
    {
        $this->periodStart = $periodStart;

        return $this;
    }

    public function getPeriodEnd(): ?\DateTimeInterface
    {
        return $this->periodEnd;
    }

    public function setPeriodEnd(?\DateTimeInterface $periodEnd): static
    {
        $this->periodEnd = $periodEnd;

        return $this;
    }

    public function getGrossPay(): ?float
    {
        return $this->grossPay;
    }

    public function setGrossPay(?float $grossPay): static
    {
        $this->grossPay = $grossPay;

        return $this;
    }

    public function getNetPay(): ?float
    {
        return $this->netPay;
    }

    public function setNetPay(?float $netPay): static
    {
        $this->netPay = $netPay;

        return $this;
    }

    public function getTaxHeld(): ?float
    {
        return $this->taxHeld;
    }

    public function setTaxHeld(float $taxHeld): static
    {
        $this->taxHeld = $taxHeld;

        return $this;
    }

    public function getHolidayPay(): ?float
    {
        return $this->holidayPay;
    }

    public function setHolidayPay(?float $holidayPay): static
    {
        $this->holidayPay = $holidayPay;

        return $this;
    }

    public function getSickLeavePay(): ?float
    {
        return $this->sickLeavePay;
    }

    public function setSickLeavePay(?float $sickLeavePay): static
    {
        $this->sickLeavePay = $sickLeavePay;

        return $this;
    }

    public function getPensionContribution(): ?float
    {
        return $this->pensionContribution;
    }

    public function setPensionContribution(?float $pensionContribution): static
    {
        $this->pensionContribution = $pensionContribution;

        return $this;
    }

    public function getHealthInsuranceDeduction(): ?float
    {
        return $this->healthInsuranceDeduction;
    }

    public function setHealthInsuranceDeduction(?float $healthInsuranceDeduction): static
    {
        $this->healthInsuranceDeduction = $healthInsuranceDeduction;

        return $this;
    }

    public function getPaymentDate(): ?\DateTimeInterface
    {
        return $this->paymentDate;
    }

    public function setPaymentDate(?\DateTimeInterface $paymentDate): static
    {
        $this->paymentDate = $paymentDate;

        return $this;
    }

    public function getStatus(): ?PayrollStatus
    {
        return $this->status;
    }

    public function setStatus(?PayrollStatus $status): static
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
