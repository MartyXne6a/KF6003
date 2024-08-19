<?php
// src/Enum/UserStatus.php
namespace App\Enum;

enum UserStatus: string
{
    case ACTIVE = 'Active';
    case INACTIVE = 'Inactive';
    case SUSPENDED = 'Suspended';
}
