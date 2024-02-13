<?php

namespace App\Filament\Resources\MarketActivationResource\Pages;

use App\Filament\Resources\MarketActivationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMarketActivation extends ListRecords
{
    protected static string $resource = MarketActivationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
