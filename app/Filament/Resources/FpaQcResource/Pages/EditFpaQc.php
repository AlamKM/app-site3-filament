<?php

namespace App\Filament\Resources\FpaQcResource\Pages;

use App\Filament\Resources\FpaQcResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFpaQc extends EditRecord
{
    protected static string $resource = FpaQcResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
