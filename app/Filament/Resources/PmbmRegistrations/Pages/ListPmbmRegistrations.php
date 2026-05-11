<?php

namespace App\Filament\Resources\PmbmRegistrations\Pages;

use App\Filament\Resources\PmbmRegistrations\PmbmRegistrationResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPmbmRegistrations extends ListRecords
{
    protected static string $resource = PmbmRegistrationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
