<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FishingSpotResource\Pages;
use App\Models\FishingSpot;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FishingSpotResource extends Resource
{
    protected static ?string $model = FishingSpot::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Fishing';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(150),
                Textarea::make('description')
                    ->maxLength(65535),
                TextInput::make('latitude')
                    ->required()
                    ->numeric()
                    ->step(0.0000001),
                TextInput::make('longitude')
                    ->required()
                    ->numeric()
                    ->step(0.0000001),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('name')->sortable()->searchable(),
                TextColumn::make('latitude'),
                TextColumn::make('longitude'),
                TextColumn::make('created_at')->dateTime()->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFishingSpots::route('/'),
            'create' => Pages\CreateFishingSpot::route('/create'),
            'edit' => Pages\EditFishingSpot::route('/{record}/edit'),
        ];
    }
}
