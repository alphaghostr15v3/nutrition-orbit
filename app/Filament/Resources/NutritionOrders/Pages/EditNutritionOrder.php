<?php

namespace App\Filament\Resources\NutritionOrders\Pages;

use App\Filament\Resources\NutritionOrders\NutritionOrderResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNutritionOrder extends EditRecord
{
    protected static string $resource = NutritionOrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
