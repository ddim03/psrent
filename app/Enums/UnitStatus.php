<?php

namespace App\Enums;

enum UnitStatus: string
{
    case AVAILABLE = 'available';
    case MAINTENANCE = 'maintenance';
    case INACTIVE = 'inactive';
}
