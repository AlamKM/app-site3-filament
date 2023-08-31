<?php

namespace App\Filament\Resources\ItemResource\Widgets;

use App\Models\Item;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsOverview extends BaseWidget
{
    //protected static string $view = 'filament.resources.item-resource.widgets.stats-overview';
    protected int | string | array $columnSpan = 'full';

    protected function getCards(): array
    {
        return [
            Card::make('Finished Goods', Item::all()->count('visa'))->description('Item'),
            Card::make('Raw Materials', '21%'),
            Card::make('Packaging Materials', '3:12'),
            Card::make('Spare Parts', '3:12'),
            Card::make('Others', '3:12'),
        ];
    }
}
