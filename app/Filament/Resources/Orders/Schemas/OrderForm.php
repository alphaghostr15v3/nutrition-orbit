<?php

namespace App\Filament\Resources\Orders\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class OrderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\Section::make('Order Information')
                    ->columns(2)
                    ->schema([
                        Select::make('customer_id')
                            ->relationship('customer', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),
                        TextInput::make('number')
                            ->default('ORD-' . strtoupper(\Illuminate\Support\Str::random(6)))
                            ->unique(\App\Models\Order::class, 'number', ignoreRecord: true)
                            ->disabled()
                            ->dehydrated()
                            ->required(),
                        TextInput::make('total_price')
                            ->required()
                            ->numeric()
                            ->prefix('$'),
                        Select::make('status')
                            ->options([
                                'pending' => 'Pending',
                                'processing' => 'Processing',
                                'completed' => 'Completed',
                                'cancelled' => 'Cancelled',
                            ])
                            ->default('pending')
                            ->required(),
                        Select::make('payment_status')
                            ->options([
                                'pending' => 'Pending', 
                                'paid' => 'Paid', 
                                'failed' => 'Failed'
                            ])
                            ->default('pending')
                            ->required(),
                    ]),
                \Filament\Forms\Components\Section::make('Order Items')
                    ->schema([
                        \Filament\Forms\Components\Repeater::make('items')
                            ->relationship('items')
                            ->schema([
                                Select::make('product_id')
                                    ->relationship('product', 'name')
                                    ->searchable()
                                    ->preload()
                                    ->required()
                                    ->reactive()
                                    ->afterStateUpdated(fn ($state, \Filament\Forms\Set $set) => $set('unit_price', \App\Models\Product::find($state)?->price ?? 0)),
                                TextInput::make('quantity')
                                    ->numeric()
                                    ->default(1)
                                    ->required(),
                                TextInput::make('unit_price')
                                    ->numeric()
                                    ->prefix('$')
                                    ->required(),
                            ])
                            ->columns(3)
                            ->columnSpanFull(),
                    ]),
                \Filament\Forms\Components\Section::make('Additional Notes')
                    ->schema([
                        Textarea::make('notes')
                            ->default(null)
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
