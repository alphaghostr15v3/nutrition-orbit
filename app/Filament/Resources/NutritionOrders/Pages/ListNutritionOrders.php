<?php

namespace App\Filament\Resources\NutritionOrders\Pages;

use App\Filament\Resources\NutritionOrders\NutritionOrderResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNutritionOrders extends ListRecords
{
    protected static string $resource = NutritionOrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
