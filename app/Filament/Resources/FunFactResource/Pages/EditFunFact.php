<?php

namespace App\Filament\Resources\FunFactResource\Pages;

use App\Filament\Resources\FunFactResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFunFact extends EditRecord
{
    protected static string $resource = FunFactResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
