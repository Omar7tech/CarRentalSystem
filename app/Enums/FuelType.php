<?php

namespace App\Enums;

enum FuelType: string
{
    case GASOLINE = 'gasoline';
    case DIESEL = 'diesel';
    case HYBRID = 'hybrid';
    case ELECTRIC = 'electric';
}
