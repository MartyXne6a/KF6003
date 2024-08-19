<?php
// src/Enum/ReportStatus.php
namespace App\Enum;

enum ReportStatus: string
{
    case PENDING = 'Pending';
    case REVIEWED = 'Reviewed';
    case ACTION_TAKEN = 'Action_taken';
}