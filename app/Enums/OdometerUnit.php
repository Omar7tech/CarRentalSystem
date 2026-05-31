<?php

namespace App\Enums;
use Filament\Support\Contracts\HasLabel;
enum OdometerUnit: string implements HasLabel
{
    case KM = 'km';
    case MI = 'mi';

    public function getLabel(): string
    {
        return match ($this) {
            self::KM => 'Kilometers',
            self::MI => 'Miles',
        };
    }
}