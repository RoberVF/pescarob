<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CaptureResource\Pages;
use App\Filament\Resources\CaptureResource\RelationManagers;
use App\Models\Capture;
use Filament\Forms;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CaptureResource extends Resource
{
    protected static ?string $model = Capture::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Fishing';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('user_id')
                    ->label('Usuario')
                    ->required()
                    ->preload()
                    ->relationship('user', 'name')
                    ->searchable(),

                Select::make('fishing_spot_id')
                    ->label('Pesquero')
                    ->preload()
                    ->required()
                    ->relationship('fishingSpot', 'name')
                    ->searchable(),

                Select::make('lure_id')
                    ->preload()
                    ->label('Señuelo')
                    ->nullable()
                    ->relationship('lure', 'name')
                    ->searchable(),

                Select::make('species_id')
                    ->label('Especie')
                    ->preload()
                    ->required()
                    ->relationship('species', 'common_name')
                    ->searchable(),

                TextInput::make('weight')
                    ->label('Peso (Kg)')
                    ->numeric()
                    ->nullable(),

                TextInput::make('length')
                    ->label('Longitud (cm)')
                    ->numeric()
                    ->nullable(),

                DateTimePicker::make('caught_at')
                    ->label('Fecha captura')
                    ->required()
                    ->default(now()),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('user.name')->label('Usuario')->sortable()->searchable(),
                TextColumn::make('fishingSpot.name')->label('Pesquero')->sortable()->searchable(),
                TextColumn::make('species.common_name')->label('Especie')->sortable()->searchable(),
                TextColumn::make('weight')->label('Peso (Kg)'),
                TextColumn::make('length')->label('Longitud (cm)'),
                TextColumn::make('caught_at')->label('Fecha')->dateTime()->sortable(),
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
            'index' => Pages\ListCaptures::route('/'),
            'create' => Pages\CreateCapture::route('/create'),
            'edit' => Pages\EditCapture::route('/{record}/edit'),
        ];
    }
}
