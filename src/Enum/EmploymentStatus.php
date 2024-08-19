<?php
// src/Enum/EmploymentStatus.php
namespace App\Enum;
enum EmploymentStatus: string
{
    case VERIFIED = 'Verified';
    case PENDING =  'Pending';
    case REJECTED = 'Rejected';
}