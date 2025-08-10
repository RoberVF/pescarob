<?php

namespace App\Filament\Resources\FishingSpotResource\Pages;

use App\Filament\Resources\FishingSpotResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFishingSpots extends ListRecords
{
    protected static string $resource = FishingSpotResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
