<?php
// src/Enum/VerificationStatus.php
namespace App\Enum;
enum VerificationStatus: string
{
    case VERIFIED = 'Verified';
    case PENDING =  'Pending';
    case REJECTED = 'Rejected';
}