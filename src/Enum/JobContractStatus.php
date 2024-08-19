<?php
// src/Enum/JobContractStatus.php
namespace App\Enum;
enum JobContractStatus: string
{
    case ACTIVE = 'Active';
    case COMPLETED = 'Completed';
    case TERMINATED = 'Terminated';
}