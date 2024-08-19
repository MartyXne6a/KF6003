<?php

// src/Enum/PartyType.php
namespace App\Enum;

enum PartyType: string
{
    case WORKER = 'Worker';
    case COMPANY = 'Company';
}
