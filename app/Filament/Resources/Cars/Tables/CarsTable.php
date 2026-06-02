<?php

namespace App\Filament\Resources\Cars\Tables;

use App\Models\Car;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ViewColumn;
use Filament\Tables\Table;

class CarsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('carModel.name')
                    ->searchable(),
                TextColumn::make('vin')
                    ->searchable(),
                TextColumn::make('year'),
                TextColumn::make('color')
                    ->searchable(),
                TextColumn::make('body_type')
                    ->badge(),
                TextColumn::make('fuel_type')
                    ->badge(),
                TextColumn::make('status')
                    ->badge(),
                ViewColumn::make('plate')
                    ->label('License Plate')
                    ->view('components.lebanese-plate'),
                TextColumn::make('odometer')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('odometer_unit')
                    ->badge(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
