<?php

// src/Enum/PaymentStatus.php
namespace App\Enum;

enum PaymentStatus: string
{
    case PAID = 'Paid';
    case UNPAID = 'Unpaid';
    case OVERDUE = 'Overdue';
}
