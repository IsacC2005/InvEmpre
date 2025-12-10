<?php

namespace App\Filament\Resources\Coupons\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CouponForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('code')
                    ->required(),
                Select::make('type')
                    ->options(['%' => '%', 'fixed' => 'Fixed'])
                    ->required(),
                TextInput::make('value')
                    ->required()
                    ->numeric(),
                TextInput::make('usage_limit')
                    ->required()
                    ->numeric(),
                TextInput::make('used_count')
                    ->required()
                    ->numeric(),
                TextInput::make('per_customer_limit')
                    ->required()
                    ->numeric(),
            ]);
    }
}
