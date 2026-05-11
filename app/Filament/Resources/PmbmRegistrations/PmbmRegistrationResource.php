<?php

namespace App\Filament\Resources\PmbmRegistrations;

use App\Filament\Resources\PmbmRegistrations\Pages\CreatePmbmRegistration;
use App\Filament\Resources\PmbmRegistrations\Pages\EditPmbmRegistration;
use App\Filament\Resources\PmbmRegistrations\Pages\ListPmbmRegistrations;
use App\Filament\Resources\PmbmRegistrations\Pages\ViewPmbmRegistration;
use App\Filament\Resources\PmbmRegistrations\Schemas\PmbmRegistrationForm;
use App\Filament\Resources\PmbmRegistrations\Schemas\PmbmRegistrationInfolist;
use App\Filament\Resources\PmbmRegistrations\Tables\PmbmRegistrationsTable;
use App\Models\PmbmRegistration;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PmbmRegistrationResource extends Resource
{
    protected static ?string $model = PmbmRegistration::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return PmbmRegistrationForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PmbmRegistrationInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PmbmRegistrationsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPmbmRegistrations::route('/'),
            'create' => CreatePmbmRegistration::route('/create'),
            'view' => ViewPmbmRegistration::route('/{record}'),
            'edit' => EditPmbmRegistration::route('/{record}/edit'),
        ];
    }
}
