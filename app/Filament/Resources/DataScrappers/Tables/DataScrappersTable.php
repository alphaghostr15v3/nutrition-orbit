<?php

namespace App\Filament\Resources\DataScrappers\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;

class DataScrappersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                \Filament\Tables\Columns\TextColumn::make('Name')
                    ->searchable()
                    ->sortable(),
                \Filament\Tables\Columns\TextColumn::make('Address')
                    ->searchable()
                    ->limit(50),
                \Filament\Tables\Columns\TextColumn::make('Phone')
                    ->searchable(),
                \Filament\Tables\Columns\TextColumn::make('Website')
                    ->searchable(),
                \Filament\Tables\Columns\TextColumn::make('Review')
                    ->numeric()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
