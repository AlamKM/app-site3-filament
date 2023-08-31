<?php

namespace App\Filament\Resources\FpaQcResource\Pages;

use App\Filament\Resources\FpaQcResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFpaQc extends CreateRecord
{
    protected static string $resource = FpaQcResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
