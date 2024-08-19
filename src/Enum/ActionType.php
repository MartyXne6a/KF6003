<?php
// src/Enum/ActionType.php
namespace App\Enum;

enum ActionType: string
{
    case DISABLE_ACCOUNT = 'Disable_account';
    case ENABLE_ACCOUNT = 'Enable_account';
    case WARNING_ISSUED = 'Warning_issued';
    case NOTE_ADDED = 'Note_added';
}