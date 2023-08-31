<?php

namespace App\Filament\Resources\FpaQcDetailResource\Pages;

use App\Filament\Resources\FpaQcDetailResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFpaQcDetail extends EditRecord
{
    protected static string $resource = FpaQcDetailResource::class;

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
