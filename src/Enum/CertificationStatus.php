<?php
// src/Enum/CertificationStatus.php
namespace App\Enum;

enum CertificationStatus: string
{
    case ACTIVE = 'Active';
    case EXPIRED = 'Expired';
    case REVOKED = 'Revoked';
}
