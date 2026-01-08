<?php

namespace App\Filament\Resources\DataFetches\Pages;

use App\Filament\Resources\DataFetches\DataFetchResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDataFetches extends ListRecords
{
    protected static string $resource = DataFetchResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
