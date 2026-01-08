<?php

namespace App\Filament\Resources\DataScrappers\Pages;

use App\Filament\Resources\DataScrappers\DataScrapperResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditDataScrapper extends EditRecord
{
    protected static string $resource = DataScrapperResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
