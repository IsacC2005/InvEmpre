<?php

namespace App\Filament\Resources\Inventories\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class InventoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('user_id')
                    ->required()
                    ->numeric(),
                TextInput::make('product_id')
                    ->required()
                    ->numeric(),
                Select::make('type')
                    ->options(['input' => 'Input', 'output' => 'Output', 'adjustment' => 'Adjustment'])
                    ->required(),
                TextInput::make('quantity')
                    ->numeric(),
                TextInput::make('reason'),
            ]);
    }
}
