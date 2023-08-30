<?php

namespace App\Filament\Resources\FpaQcDetailResource\Pages;

use App\Filament\Resources\FpaQcDetailResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFpaQcDetails extends ListRecords
{
    protected static string $resource = FpaQcDetailResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
