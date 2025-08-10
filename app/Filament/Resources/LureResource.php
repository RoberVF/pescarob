<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LureResource\Pages;
use App\Filament\Resources\LureResource\RelationManagers;
use App\Models\Lure;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LureResource extends Resource
{
    protected static ?string $model = Lure::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Fishing';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
       return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(150),

                TextInput::make('type')
                    ->required()
                    ->maxLength(100),

                TextInput::make('brand')
                    ->maxLength(100),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('name')->sortable()->searchable(),
                TextColumn::make('type')->sortable()->searchable(),
                TextColumn::make('brand')->sortable()->searchable(),
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
            'index' => Pages\ListLures::route('/'),
            'create' => Pages\CreateLure::route('/create'),
            'edit' => Pages\EditLure::route('/{record}/edit'),
        ];
    }
}
