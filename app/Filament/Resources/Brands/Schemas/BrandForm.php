<?php

namespace App\Filament\Resources\Brands\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class BrandForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Brand Information')
                    ->description('Manage brand details')
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                    ]),
                Section::make('Visibility Settings')
                    ->description('Control brand display preferences')
                    ->schema([
                        Toggle::make('show_on_website')
                            ->label('Show on Website')
                            ->helperText('Enable to display this brand on the public website')
                            ->default(true),
                    ]),
            ]);
    }
}
