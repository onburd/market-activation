<?php

namespace App\Filament\Resources\MarketActivationResource\Pages;

use Filament\Pages\Actions;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\ViewRecord;
use Filament\Forms\Components\DatePicker;
use App\Filament\Resources\MarketActivationResource;

class ViewMarketActivation extends ViewRecord
{
    protected static string $resource = MarketActivationResource::class;


    protected function getFormSchema(): array
    {
        
        return [
            /*TextInput::make('service_type.name')->label('Service Type'),
            TextInput::make('cab_type.name')->label('Cab Type'),
            TextInput::make('cab_class.name')->label('Class'),
            TextInput::make('cab_model.name')->label('Cab Model'),
            TextInput::make('year')->label('Year'),
            TextInput::make('ac')->label('AC'),
            TextInput::make('number_of_passenger')->label('Number Of Passenger'),
            TextInput::make('cab_provider.email')->label('Provider'),
            TextInput::make('car_image')->label('Car Image'),*/
        ];
    }
  

}
