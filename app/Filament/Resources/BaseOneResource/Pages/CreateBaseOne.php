<?php

namespace App\Filament\Resources\BaseOneResource\Pages;

use App\Filament\Resources\BaseOneResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBaseOne extends CreateRecord
{
    protected static string $resource = BaseOneResource::class;
}
