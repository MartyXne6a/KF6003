<?php

// src/Enum/OfferStatus.php
namespace App\Enum;

enum OfferStatus: string
{
    case OPEN = 'Open';
    case FILLED = 'Filled';
    case EXPIRED = 'Expired';
}
