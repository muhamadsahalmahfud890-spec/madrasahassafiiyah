<?php

namespace App\Filament\Pages;

use App\Models\Setting;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\RichEditor;
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
                Tabs::make('Settings')
                    ->tabs([
                        Tabs\Tab::make('Identitas')
                            ->icon('heroicon-o-identification')
                            ->schema([
                                TextInput::make('nama_sekolah')
                                    ->label('Nama Madrasah')
                                    ->required(),
                                TextInput::make('nama_lengkap')
                                    ->label('Nama Lengkap Madrasah'),
                                TextInput::make('tagline'),
                                TextInput::make('nsm')
                                    ->label('NSM (Nomor Statistik Madrasah)'),
                                TextInput::make('npsn')
                                    ->label('NPSN (Nomor Pokok Sekolah Nasional)'),
                                TextInput::make('kepala_madrasah'),
                                TextInput::make('tahun_berdiri'),
                            ])->columns(2),

                        Tabs\Tab::make('Kontak & Alamat')
                            ->icon('heroicon-o-map-pin')
                            ->schema([
                                Textarea::make('alamat')->columnSpanFull(),
                                TextInput::make('telepon')
                                    ->tel(),
                                TextInput::make('whatsapp')
                                    ->label('WhatsApp')
                                    ->tel(),
                                TextInput::make('email')
                                    ->email(),
                                Textarea::make('maps_embed')
                                    ->label('Google Maps Embed Code')
                                    ->columnSpanFull()
                                    ->rows(4),
                            ])->columns(2),

                        Tabs\Tab::make('Visi & Misi')
                            ->icon('heroicon-o-document-text')
                            ->schema([
                                RichEditor::make('visi')
                                    ->label('Visi')
                                    ->columnSpanFull(),
                                RichEditor::make('misi')
                                    ->label('Misi')
                                    ->columnSpanFull(),
                            ]),

                        Tabs\Tab::make('Media Sosial')
                            ->icon('heroicon-o-share')
                            ->schema([
                                TextInput::make('facebook')->url(),
                                TextInput::make('instagram')->url(),
                                TextInput::make('youtube')->url(),
                                TextInput::make('twitter')->url()->label('Twitter / X'),
                                TextInput::make('tiktok')->url()->label('TikTok'),
                            ])->columns(2),

                        Tabs\Tab::make('SEO & Tampilan')
                            ->icon('heroicon-o-paint-brush')
                            ->schema([
                                FileUpload::make('logo')
                                    ->label('Logo Madrasah')
                                    ->disk('public')
                                    ->directory('settings'),
                                FileUpload::make('favicon')
                                    ->label('Favicon')
                                    ->disk('public')
                                    ->directory('settings'),
                                FileUpload::make('hero_image')
                                    ->label('Hero Image (Beranda)')
                                    ->disk('public')
                                    ->directory('settings'),
                                TextInput::make('footer_text')
                                    ->label('Teks Footer (Copyright)')
                                    ->placeholder('© 2024 MDTU Assafiiyah'),
                                Textarea::make('meta_description')
                                    ->label('Meta Description (SEO)')
                                    ->columnSpanFull(),
                                TextInput::make('meta_keywords')
                                    ->label('Meta Keywords (SEO)')
                                    ->columnSpanFull(),
                            ])->columns(2),

                        Tabs\Tab::make('Fitur & Sistem')
                            ->icon('heroicon-o-cpu-chip')
                            ->schema([
                                Toggle::make('pendaftaran_aktif')
                                    ->label('Pendaftaran PMB Aktif')
                                    ->helperText('Aktifkan atau matikan formulir pendaftaran online'),
                                TextInput::make('link_pendaftaran_external')
                                    ->label('Link Pendaftaran Eksternal')
                                    ->url()
                                    ->helperText('Kosongkan jika ingin menggunakan formulir internal'),
                            ]),
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
