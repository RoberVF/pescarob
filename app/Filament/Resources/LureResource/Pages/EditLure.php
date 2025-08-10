<?php

namespace App\Filament\Resources\LureResource\Pages;

use App\Filament\Resources\LureResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLure extends EditRecord
{
    protected static string $resource = LureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
