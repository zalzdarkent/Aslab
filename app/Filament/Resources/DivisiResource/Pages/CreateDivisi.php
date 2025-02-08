<?php

namespace App\Filament\Resources\DivisiResource\Pages;

use App\Filament\Resources\DivisiResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDivisi extends CreateRecord
{
    protected static string $resource = DivisiResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
