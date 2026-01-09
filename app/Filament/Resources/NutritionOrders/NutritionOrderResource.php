<?php

namespace App\Filament\Resources\NutritionOrders;

use App\Filament\Resources\NutritionOrders\Pages\CreateNutritionOrder;
use App\Filament\Resources\NutritionOrders\Pages\EditNutritionOrder;
use App\Filament\Resources\NutritionOrders\Pages\ListNutritionOrders;
use App\Filament\Resources\NutritionOrders\Schemas\NutritionOrderForm;
use App\Filament\Resources\NutritionOrders\Tables\NutritionOrdersTable;
use App\Models\NutritionOrder;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use Filament\Support\Icons\Heroicon;

class NutritionOrderResource extends Resource
{
    protected static ?string $model = NutritionOrder::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-shopping-cart';

    protected static ?string $recordTitleAttribute = 'order_id_custom';

    public static function form(Schema $schema): Schema
    {
        return NutritionOrderForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return NutritionOrdersTable::configure($table);
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
            'index' => ListNutritionOrders::route('/'),
            'create' => CreateNutritionOrder::route('/create'),
            'edit' => EditNutritionOrder::route('/{record}/edit'),
        ];
    }
}
