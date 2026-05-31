<?php

namespace App\Enums;

enum BodyType: string
{
    case SEDAN = 'sedan';
    case COUPE = 'coupe';
    case HATCHBACK = 'hatchback';
    case SUV = 'suv';
    case CROSSOVER = 'crossover';
    case WAGON = 'wagon';
    case PICKUP = 'pickup';
    case CONVERTIBLE = 'convertible';
    case VAN = 'van';
    case MINIVAN = 'minivan';
    case ROADSTER = 'roadster';
    case SPORTS = 'sports';
}
