<?php

namespace App\Filament\Resources\BaseThreeResource\Pages;

use App\Filament\Resources\BaseThreeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBaseThree extends EditRecord
{
    protected static string $resource = BaseThreeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
