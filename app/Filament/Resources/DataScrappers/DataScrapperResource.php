<?php

namespace App\Filament\Resources\DataScrappers;

use App\Filament\Resources\DataScrappers\Pages\CreateDataScrapper;
use App\Filament\Resources\DataScrappers\Pages\EditDataScrapper;
use App\Filament\Resources\DataScrappers\Pages\ListDataScrappers;
use App\Filament\Resources\DataScrappers\Schemas\DataScrapperForm;
use App\Filament\Resources\DataScrappers\Tables\DataScrappersTable;
use App\Models\DataScrapper;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class DataScrapperResource extends Resource
{
    protected static ?string $model = DataScrapper::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return DataScrapperForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DataScrappersTable::configure($table);
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
            'index' => ListDataScrappers::route('/'),
            'create' => CreateDataScrapper::route('/create'),
            'edit' => EditDataScrapper::route('/{record}/edit'),
        ];
    }
}
