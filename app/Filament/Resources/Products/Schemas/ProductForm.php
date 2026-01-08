<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\FileUpload;
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
                \Filament\Forms\Components\Section::make('Product Details')
                    ->columns(2)
                    ->schema([
                        \Filament\Forms\Components\Select::make('category_id')
                            ->relationship('category', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),
                        TextInput::make('name')
                            ->required()
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (string $operation, $state, \Filament\Forms\Set $set) => $operation === 'create' ? $set('slug', \Illuminate\Support\Str::slug($state)) : null),
                        TextInput::make('slug')
                            ->required()
                            ->disabled()
                            ->dehydrated()
                            ->unique(\App\Models\Product::class, 'slug', ignoreRecord: true),
                        TextInput::make('brand')
                            ->default(null),
                        TextInput::make('price')
                            ->required()
                            ->numeric()
                            ->prefix('$'),
                        TextInput::make('stock')
                            ->required()
                            ->numeric()
                            ->default(0),
                    ]),
                \Filament\Forms\Components\Section::make('Description & Media')
                    ->schema([
                        \Filament\Forms\Components\RichEditor::make('description')
                            ->default(null)
                            ->columnSpanFull(),
                        FileUpload::make('image')
                            ->image()
                            ->directory('products'),
                    ]),
                \Filament\Forms\Components\Section::make('Status')
                    ->columns(3)
                    ->schema([
                        Toggle::make('is_active')
                            ->default(true)
                            ->required(),
                        Toggle::make('is_featured')
                            ->required(),
                        Toggle::make('on_sale')
                            ->required(),
                    ]),
            ]);
    }
}
