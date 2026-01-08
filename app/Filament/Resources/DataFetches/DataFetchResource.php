<?php

namespace App\Filament\Resources\DataFetches;

use App\Filament\Resources\DataFetches\Pages\CreateDataFetch;
use App\Filament\Resources\DataFetches\Pages\EditDataFetch;
use App\Filament\Resources\DataFetches\Pages\ListDataFetches;
use App\Filament\Resources\DataFetches\Schemas\DataFetchForm;
use App\Filament\Resources\DataFetches\Tables\DataFetchesTable;
use App\Models\DataFetch;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class DataFetchResource extends Resource
{
    protected static ?string $model = DataFetch::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return DataFetchForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DataFetchesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListDataFetches::route('/'),
            'create' => CreateDataFetch::route('/create'),
            'edit' => EditDataFetch::route('/{record}/edit'),
        ];
    }
}
