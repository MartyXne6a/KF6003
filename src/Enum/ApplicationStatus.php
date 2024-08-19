<?php

// src/Enum/ApplicationStatus.php
namespace App\Enum;

enum ApplicationStatus: string
{
    case PENDING = 'Pending';
    case ACCEPTED = 'Accepted';
    case REJECTED = 'Rejected';
    case WITHDRAWN = 'Withdrawn';
}
