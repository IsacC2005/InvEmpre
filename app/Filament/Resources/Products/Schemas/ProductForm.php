<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('category_id')
                    ->required()
                    ->numeric(),
                TextInput::make('name')
                    ->required(),
                TextInput::make('sku')
                    ->label('SKU')
                    ->required(),
                Textarea::make('description')
                    ->columnSpanFull(),
                TextInput::make('short_description')
                    ->required(),
                Select::make('unit_of_measure')
                    ->options([
            'kg' => 'Kg',
            'g' => 'G',
            'mg' => 'Mg',
            'l' => 'L',
            'ml' => 'Ml',
            'm' => 'M',
            'mm' => 'Mm',
            'cm' => 'Cm',
            'km' => 'Km',
            'unidad' => 'Unidad',
            'caja' => 'Caja',
            'paquete' => 'Paquete',
            'rollo' => 'Rollo',
            'gal' => 'Gal',
            'oz' => 'Oz',
            'lb' => 'Lb',
            'm2' => 'M2',
            'm3' => 'M3',
            '' => '',
        ])
                    ->required(),
                Toggle::make('is_active')
                    ->required(),
                TextInput::make('cost_price')
                    ->required()
                    ->numeric(),
                TextInput::make('sale_price')
                    ->required()
                    ->numeric(),
                TextInput::make('stock_quantily')
                    ->required()
                    ->numeric(),
                TextInput::make('min_stock_level')
                    ->required()
                    ->numeric(),
                TextInput::make('max_stock_level')
                    ->required()
                    ->numeric(),
            ]);
    }
}
