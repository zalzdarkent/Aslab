<?php

namespace App\Filament\Resources\DivisiResource\Pages;

use App\Filament\Resources\DivisiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDivisis extends ListRecords
{
    protected static string $resource = DivisiResource::class;
    protected static ?string $label = 'Divisi';
    protected static ?string $navigationLabel = 'Divisi';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
