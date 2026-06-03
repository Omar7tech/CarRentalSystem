<?php

namespace App\Filament\Resources\Cars\Schemas;

use App\Enums\BodyType;
use App\Enums\CarStatus;
use App\Enums\FuelType;
use App\Enums\OdometerUnit;
use App\Enums\PlateNumberType;
use App\Models\Brand;
use App\Models\Car;
use App\Models\CarModel;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;

class CarForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('brand_id')
                    ->label('Brand')
                    ->live()
                    ->dehydrated(false)
                    ->options(Brand::pluck('name', 'id'))
                    ->searchable()
                    ->preload()
                    
                    ->afterStateUpdated(function (Set $set) {
                        $set('car_model_id', null);
                    })
                    ->required(),
                Select::make('car_model_id')
                    ->label('Model')
                    ->placeholder(fn (Get $get): string => empty($get('brand_id')) ? 'First select brand' : 'Select a model')
                    ->options(function (?Car $record, Get $get, Set $set) {
                        if (!empty($record) && empty($get('brand_id'))) {
                            $set('brand_id', $record->carModel->brand_id);
                            $set('car_model_id', $record->car_model_id);
                        }

                        return CarModel::where('brand_id', $get('brand_id'))->pluck('name', 'id');
                    })
                    ->searchable()
                    ->preload()
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
