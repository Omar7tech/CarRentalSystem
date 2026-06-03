<?php

namespace App\Filament\Resources\Cars\Tables;

use App\Filament\Tables\Columns\LebanesePlateColumn;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
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
                LebanesePlateColumn::make('plate')
                    ->toggleable(isToggledHiddenByDefault: false)
                    ->label('License Plate'),
                TextColumn::make('odometer')
                    ->label('Odometer')
                    ->description(fn ($record) => $record->odometer_unit?->value === 'km'
                        ? number_format($record->miles ?? 0, 0) . ' mi'
                        : number_format($record->kilometers ?? 0, 0) . ' km'
                    )
                    ->formatStateUsing(fn ($record) => $record->formatted_odometer)
                    ->sortable(),
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
