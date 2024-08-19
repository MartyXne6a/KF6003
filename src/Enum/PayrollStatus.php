<?php
// src/Enum/PayrollStatus.php
namespace App\Enum;

enum PayrollStatus: string
{
    case PENDING = 'Pending';
    case COMPLETED = 'Completed';
}
