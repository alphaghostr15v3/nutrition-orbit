<?php

namespace App\Filament\Resources\DataFetches\Schemas;

use Filament\Schemas\Schema;

class DataFetchForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\TextInput::make('Name')
                    ->required(),
                \Filament\Forms\Components\TextInput::make('Address'),
                \Filament\Forms\Components\TextInput::make('Phone')
                    ->tel(),
                \Filament\Forms\Components\TextInput::make('Email')
                    ->email(),
                \Filament\Forms\Components\TextInput::make('Website')
                    ->url(),
                \Filament\Forms\Components\TextInput::make('Review')
                    ->numeric(),
            ]);
    }
}
