<?php

namespace App\Filament\Resources\NutritionOrders\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DatePicker;
use Filament\Schemas\Schema;

class NutritionOrderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Schemas\Components\Section::make('Order Information')
                    ->columns(2)
                    ->schema([
                        TextInput::make('order_id_custom')
                            ->label('Order ID')
                            ->required(),
                        TextInput::make('customer_name')
                            ->required(),
                        TextInput::make('phone_number')
                            ->tel(),
                        TextInput::make('product_name')
                            ->required(),
                        \Filament\Forms\Components\Select::make('brand')
                            ->options(\App\Models\Brand::query()->pluck('name', 'name'))
                            ->searchable()
                            ->preload(),
                        TextInput::make('quantity')
                            ->numeric()
                            ->default(1)
                            ->required(),
                        TextInput::make('order_status'),
                        DatePicker::make('order_date')
                            ->default(now()),
                    ]),
                \Filament\Schemas\Components\Section::make('Additional Details')
                    ->schema([
                        Textarea::make('description')
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
