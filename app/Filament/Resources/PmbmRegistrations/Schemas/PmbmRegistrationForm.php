<?php

namespace App\Filament\Resources\PmbmRegistrations\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PmbmRegistrationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('registration_number')
                    ->label('Nomor Pendaftaran')
                    ->maxLength(255),

                TextInput::make('full_name')
                    ->label('Nama Lengkap')
                    ->required()
                    ->maxLength(255),

                TextInput::make('nik')
                    ->label('NIK')
                    ->maxLength(16),

                TextInput::make('birth_place')
                    ->label('Tempat Lahir')
                    ->maxLength(255),

                DatePicker::make('birth_date')
                    ->label('Tanggal Lahir'),

                Select::make('gender')
                    ->label('Jenis Kelamin')
                    ->options([
                        'L' => 'Laki-laki',
                        'P' => 'Perempuan',
                    ]),

                TextInput::make('parent_name')
                    ->label('Nama Orang Tua/Wali')
                    ->maxLength(255),

                TextInput::make('phone')
                    ->label('No. Telepon')
                    ->tel()
                    ->maxLength(20),

                TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->maxLength(255),

                TextInput::make('previous_school')
                    ->label('Asal Sekolah')
                    ->maxLength(255),

                Select::make('status')
                    ->label('Status')
                    ->options([
                        'pending' => 'Menunggu',
                        'lolos' => 'Lolos',
                        'tidak_lolos' => 'Tidak Lolos',
                    ])
                    ->default('pending'),

                Textarea::make('notes')
                    ->label('Catatan')
                    ->rows(3),
            ]);
    }
}
