<?php

namespace App\Filament\Resources\Customers\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CustomerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\Section::make('Customer Info')
                    ->columns(2)
                    ->schema([
                        TextInput::make('name')
                            ->required(),
                        TextInput::make('email')
                            ->label('Email address')
                            ->email()
                            ->required(),
                        TextInput::make('phone')
                            ->tel()
                            ->default(null),
                    ]),
                \Filament\Forms\Components\Section::make('Address Details')
                    ->columns(2)
                    ->schema([
                        TextInput::make('address')
                            ->columnSpanFull()
                            ->default(null),
                        TextInput::make('city')
                            ->default(null),
                        TextInput::make('state')
                            ->default(null),
                        TextInput::make('zip')
                            ->default(null),
                    ]),
            ]);
    }
}
