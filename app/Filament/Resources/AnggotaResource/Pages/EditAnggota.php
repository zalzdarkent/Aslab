<?php

namespace App\Filament\Resources\AnggotaResource\Pages;

use App\Filament\Resources\AnggotaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditAnggota extends EditRecord
{
    protected static string $resource = AnggotaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\DeleteAction::make(),
        ];
    }
    protected function mutateFormDataBeforeSave(array $data): array
    {
        $record = $this->record;

        if ($record->photo && $record->photo !== $data['photo']) {
            Storage::disk('public')->delete($record->photo);
        }

        return $data;
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
