<?php

namespace App\Models;

use App\Enums\BodyType;
use App\Enums\CarStatus;
use App\Enums\FuelType;
use App\Enums\OdometerUnit;
use App\Enums\PlateNumberType;
use Illuminate\Database\Eloquent\Attributes\Guarded;
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
}
