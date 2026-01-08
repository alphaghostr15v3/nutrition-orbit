<?php

namespace App\Filament\Resources\DataScrappers\Pages;

use App\Filament\Resources\DataScrappers\DataScrapperResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDataScrappers extends ListRecords
{
    protected static string $resource = DataScrapperResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
