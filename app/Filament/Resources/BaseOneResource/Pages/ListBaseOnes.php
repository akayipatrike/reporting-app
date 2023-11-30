<?php

namespace App\Filament\Resources\BaseOneResource\Pages;

use App\Filament\Resources\BaseOneResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBaseOnes extends ListRecords
{
    protected static string $resource = BaseOneResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
