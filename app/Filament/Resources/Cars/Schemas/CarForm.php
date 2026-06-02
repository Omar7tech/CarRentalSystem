<?php

namespace App\Filament\Resources\Cars\Schemas;

use App\Enums\BodyType;
use App\Enums\CarStatus;
use App\Enums\FuelType;
use App\Enums\OdometerUnit;
use App\Enums\PlateNumberType;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CarForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('car_model_id')
                    ->relationship('carModel', 'name')
                    ->required(),
                TextInput::make('vin')
                    ->default(null),
                TextInput::make('year')
                    ->required(),
                TextInput::make('color')
                    ->required(),
                Select::make('body_type')
                    ->options(BodyType::class)
                    ->default('sedan')
                    ->required(),
                Select::make('fuel_type')
                    ->options(FuelType::class)
                    ->default('gasoline')
                    ->required(),
                Select::make('status')
                    ->options(CarStatus::class)
                    ->default('available')
                    ->required(),
                Select::make('plate_number_type')
                    ->options(PlateNumberType::class)
                    ->default('white')
                    ->required(),
                TextInput::make('plate_code')
                    ->required(),
                TextInput::make('plate_number')
                    ->required(),
                TextInput::make('odometer')
                    ->required()
                    ->numeric()
                    ->default(0),
                Select::make('odometer_unit')
                    ->options(OdometerUnit::class)
                    ->default('km')
                    ->required(),
            ]);
    }
}
