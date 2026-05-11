<?php

namespace App\Filament\Resources\Galleries\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class GalleryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Judul')
                    ->required()
                    ->maxLength(255),

                FileUpload::make('image')
                    ->label('Gambar')
                    ->image()
                    ->required()
                    ->directory('galleries'),

                TextInput::make('category')
                    ->label('Kategori')
                    ->maxLength(255),
            ]);
    }
}
