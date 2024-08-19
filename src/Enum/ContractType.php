<?php
// src/Enum/ContractType.php
namespace App\Enum;

enum ContractType: string
{
    case PART_TIME = 'Part-time';
    case FULL_TIME = 'Full-time';
    case TEMPORARY = 'Temporary';
}
