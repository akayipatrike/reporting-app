<?php

namespace App\Filament\Resources\BaseTwoResource\Pages;

use App\Filament\Resources\BaseTwoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBaseTwos extends ListRecords
{
    protected static string $resource = BaseTwoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
