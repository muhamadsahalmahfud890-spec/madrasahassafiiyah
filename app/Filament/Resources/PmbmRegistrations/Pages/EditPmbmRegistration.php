<?php

namespace App\Filament\Resources\PmbmRegistrations\Pages;

use App\Filament\Resources\PmbmRegistrations\PmbmRegistrationResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditPmbmRegistration extends EditRecord
{
    protected static string $resource = PmbmRegistrationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
