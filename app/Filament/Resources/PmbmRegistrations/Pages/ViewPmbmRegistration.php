<?php

namespace App\Filament\Resources\PmbmRegistrations\Pages;

use App\Filament\Resources\PmbmRegistrations\PmbmRegistrationResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPmbmRegistration extends ViewRecord
{
    protected static string $resource = PmbmRegistrationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
