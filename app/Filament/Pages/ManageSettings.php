<?php

namespace App\Filament\Pages;

use App\Models\Setting;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Pages\Page;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Cache;

class ManageSettings extends Page implements HasForms
{
    use InteractsWithForms;

    protected static \BackedEnum|string|null $navigationIcon = 'heroicon-o-cog-6-tooth';
    protected static \UnitEnum|string|null $navigationGroup = 'Pengaturan';
    protected static string|null $navigationLabel = 'Pengaturan Website';
    protected string $view = 'filament.pages.manage-settings';
    protected ?string $heading = 'Pengaturan Website';

    public ?array $data = [];

    public function mount(): void
    {
        // Load all settings
        $settings = Setting::all()->pluck('value', 'key')->toArray();
        $this->form->fill($settings);
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Identitas Madrasah')
                    ->schema([
                        TextInput::make('nama_sekolah')
                            ->label('Nama Madrasah'),
                        TextInput::make('nama_lengkap')
                            ->label('Nama Lengkap Madrasah'),
                        TextInput::make('tagline'),
                        TextInput::make('kepala_madrasah'),
                        TextInput::make('tahun_berdiri'),
                    ])->columns(2),
                
                Section::make('Kontak')
                    ->schema([
                        Textarea::make('alamat')->columnSpanFull(),
                        TextInput::make('telepon'),
                        TextInput::make('email')->email(),
                    ])->columns(2),

                Section::make('Upload')
                    ->schema([
                        FileUpload::make('logo')
                            ->disk('public')
                            ->directory('settings'),
                        FileUpload::make('hero_image')
                            ->disk('public')
                            ->directory('settings'),
                    ])->columns(2),

                Section::make('Media Sosial')
                    ->schema([
                        TextInput::make('facebook')->url(),
                        TextInput::make('instagram')->url(),
                        TextInput::make('youtube')->url(),
                    ])->columns(3),

                Section::make('Google Maps')
                    ->schema([
                        Textarea::make('maps_embed')
                            ->columnSpanFull()
                            ->rows(4),
                    ]),
            ])
            ->statePath('data');
    }

    public function save(): void
    {
        $data = $this->form->getState();

        foreach ($data as $key => $value) {
            Setting::set($key, $value);
        }

        Notification::make()
            ->title('Pengaturan berhasil disimpan')
            ->success()
            ->send();
    }
}
