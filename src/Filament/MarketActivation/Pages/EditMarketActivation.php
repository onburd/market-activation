<?php

namespace App\Filament\Resources\MarketActivationResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\MarketActivationResource;

class EditMarketActivation extends EditRecord
{
    protected static string $resource = MarketActivationResource::class;

    
    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
