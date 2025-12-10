<?php

namespace App\Filament\Resources\Discounts\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class DiscountForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('string')
                    ->required(),
                Select::make('type')
                    ->options(['%' => '%', 'fixed' => 'Fixed'])
                    ->required(),
                TextInput::make('value')
                    ->required()
                    ->numeric(),
                DatePicker::make('start_date')
                    ->required(),
                DatePicker::make('end_date')
                    ->required(),
                Select::make('apply_to')
                    ->options([
            'all products' => 'All products',
            'specific products' => 'Specific products',
            'specific categories' => 'Specific categories',
        ])
                    ->required(),
            ]);
    }
}
