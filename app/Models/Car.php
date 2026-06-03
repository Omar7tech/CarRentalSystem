<?php

namespace App\Models;

use App\Enums\BodyType;
use App\Enums\CarStatus;
use App\Enums\FuelType;
use App\Enums\OdometerUnit;
use App\Enums\PlateNumberType;
use Illuminate\Database\Eloquent\Attributes\Guarded;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Guarded(['id'])]

class Car extends Model
{
    /** @use HasFactory<\Database\Factories\CarFactory> */
    use HasFactory;

    protected $casts = [
        'body_type' => BodyType::class,
        'fuel_type' => FuelType::class,
        'status' => CarStatus::class,
        'odometer_unit' => OdometerUnit::class,
        'plate_number_type' => PlateNumberType::class,
        'year' => 'integer',
        'odometer' => 'integer',
    ];

    public function carModel(): BelongsTo
    {
        return $this->belongsTo(CarModel::class);
    }

    protected function formattedOdometer(): Attribute
    {
        return Attribute::make(
            get: fn (): ?string => $this->odometer !== null && $this->odometer_unit !== null
                ? number_format($this->odometer) . ' ' . $this->odometer_unit->value
                : null,
        );
    }

    protected function kilometers(): Attribute
    {
        return Attribute::make(
            get: fn (): ?float => match (true) {
                $this->odometer === null || $this->odometer_unit === null => null,
                $this->odometer_unit === OdometerUnit::KM => (float) $this->odometer,
                default => round($this->odometer * 1.60934, 2),
            },
        );
    }

    protected function miles(): Attribute
    {
        return Attribute::make(
            get: fn (): ?float => match (true) {
                $this->odometer === null || $this->odometer_unit === null => null,
                $this->odometer_unit === OdometerUnit::MI => (float) $this->odometer,
                default => round($this->odometer / 1.60934, 2),
            },
        );
    }
}
