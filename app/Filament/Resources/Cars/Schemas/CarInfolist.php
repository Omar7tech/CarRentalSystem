<?php

namespace App\Filament\Resources\Cars\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class CarInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('carModel.name')
                    ->label('Car model'),
                TextEntry::make('vin')
                    ->placeholder('-'),
                TextEntry::make('year'),
                TextEntry::make('color'),
                TextEntry::make('body_type')
                    ->badge(),
                TextEntry::make('fuel_type')
                    ->badge(),
                TextEntry::make('status')
                    ->badge(),
                TextEntry::make('plate_number_type')
                    ->badge(),
                TextEntry::make('plate_code'),
                TextEntry::make('plate_number'),
                TextEntry::make('odometer')
                    ->numeric(),
                TextEntry::make('odometer_unit')
                    ->badge(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
