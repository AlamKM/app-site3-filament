<?php

namespace App\Filament\Resources\FpaQcResource\Pages;

use App\Filament\Resources\FpaQcResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFpaQcs extends ListRecords
{
    protected static string $resource = FpaQcResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
