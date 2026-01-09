<?php

namespace App\Filament\Resources\Inventories\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class InventoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Schemas\Components\Section::make('Inventory Details')
                    ->columns(2)
                    ->schema([
                        TextInput::make('product_id_custom')
                            ->label('Product ID')
                            ->default(function () {
                                $latest = \App\Models\Inventory::query()->latest('id')->first();
                                if (! $latest || ! preg_match('/P(\d+)/', $latest->product_id_custom, $matches)) {
                                    return 'P001';
                                }
                                $nextNumber = intval($matches[1]) + 1;
                                return 'P' . str_pad($nextNumber, 3, '0', STR_PAD_LEFT);
                            })
                            ->disabled()
                            ->dehydrated()
                            ->required(),
                        TextInput::make('product_name')
                            ->label('Product Name')
                            ->required(),
                        Select::make('brand_name')
                            ->label('Brand')
                            ->options(\App\Models\Brand::query()->pluck('name', 'name'))
                            ->searchable()
                            ->preload(),
                        Select::make('category_name')
                            ->label('Category')
                            ->options(\App\Models\Category::query()->pluck('name', 'name'))
                            ->searchable()
                            ->preload(),
                        TextInput::make('price')
                            ->numeric()
                            ->prefix('$'),
                        TextInput::make('available_quantity')
                            ->numeric()
                            ->default(0)
                            ->required(),
                        Select::make('stock_status')
                            ->options([
                                'in_stock' => 'In Stock',
                                'low_stock' => 'Low Stock',
                                'out_of_stock' => 'Out of Stock',
                            ])
                            ->default('in_stock'),
                    ]),
            ]);
    }
}
