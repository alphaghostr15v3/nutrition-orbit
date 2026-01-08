<?php

namespace App\Filament\Resources\DataFetches\Pages;

use App\Filament\Resources\DataFetches\DataFetchResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditDataFetch extends EditRecord
{
    protected static string $resource = DataFetchResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
