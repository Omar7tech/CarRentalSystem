<?php

namespace App\Filament\Resources\Brands\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class BrandInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Brand Details')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                ImageEntry::make('logo')
                                    ->imageSize(150)
                                    ->columnSpanFull(),
                                TextEntry::make('name')
                                    ->weight('bold')
                                    ->size('lg')
                                    ->columnSpan(1),
                                IconEntry::make('show_on_website')
                                    ->boolean()
                                    ->label('Visible on Website')
                                    ->columnSpan(1),
                            ]),
                    ]),
            ]);
    }
}
