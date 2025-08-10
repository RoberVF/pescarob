<?php

namespace App\Filament\Resources\LureResource\Pages;

use App\Filament\Resources\LureResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLures extends ListRecords
{
    protected static string $resource = LureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
