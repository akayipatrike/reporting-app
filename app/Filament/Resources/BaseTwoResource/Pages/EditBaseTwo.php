<?php

namespace App\Filament\Resources\BaseTwoResource\Pages;

use App\Filament\Resources\BaseTwoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBaseTwo extends EditRecord
{
    protected static string $resource = BaseTwoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
