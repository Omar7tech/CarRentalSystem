<?php

namespace App\Enums;

enum CarStatus: string
{
    case Available = 'available';
    case Reserved = 'reserved';
    case Rented = 'rented';
    case Maintenance = 'maintenance';
    case Inactive = 'inactive';
}
