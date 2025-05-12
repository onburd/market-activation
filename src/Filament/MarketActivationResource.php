<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;

use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Onburd\MarketActivation\Models\MarketActivation;
use Filament\Forms\Components\Select;
use App\Filament\Resources\MarketActivationResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;

class MarketActivationResource extends Resource
{
    protected static ?string $model = MarketActivation::class;

    protected static ?string $navigationGroup = 'Market Activation';
    protected static ?string $navigationLabel = 'Market Activation';

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                     FileUpload::make('country_flag')
                    ->directory('uploads/markets')->label('Country flag'),

                TextInput::make('country_name')
                    ->required()->label('Country name'),

                TextInput::make('iso_currency')
                    ->required()->label('Currency iso code'),

                TextInput::make('currency_symbol')->label('Currency symbol')
                    ->required(),
                Textarea::make('market_email')->label('Market email')
                    ->required(),
                TextInput::make('currency')->label('Currency name')
                    ->required(),
                TextInput::make('country_code')->label('Country Code')
                    ->required()

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('country_flag')->circular()->label('Country lag'),

                TextColumn::make('country_name')->label('Country name'),

                TextColumn::make('iso_currency')->label('currency iso code'),

                TextColumn::make('currency_symbol')->label('Currency symbol'),
                TextColumn::make('market_email')->label('Market email'),
                TextColumn::make('currency')->label('Currency name'),
                TextColumn::make('country_code')->label('Country code')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make()
                ]),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }


    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMarketActivation::route('/'),
            'create' => Pages\CreateMarketActivation::route('/create'),
            'view' => Pages\ViewMarketActivation::route('/{record}'),
            'edit' => Pages\EditMarketActivation::route('/{record}/edit'),
        ];
    }

    public static function getRelations(): array
    {
        return [
            //
           // RouteRelationManager::class
        ];
    }
}
