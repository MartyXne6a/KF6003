<?php
// src/Enum/UserRole.php
namespace App\Enum;

enum UserRole: string
{
case ADMIN = 'Admin';
case WORKER = 'Worker';
case COMPANY = 'Company';
}
?>