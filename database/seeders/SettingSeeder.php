<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            'nama_sekolah' => 'MDTU Assafiiyah',
            'nama_lengkap' => 'Madrasah Diniyah Takmiliyah Ula Assafiiyah',
            'tagline' => 'Mendidik Generasi Qurani yang Berakhlak Mulia',
            'alamat' => 'Jl. Pesantren Assafiiyah No. 1, Bekasi, Jawa Barat',
            'telepon' => '0838-2132-1752/0821-2748-2545',
            'facebook' => 'https://facebook.com/mdtuassafiiyah',
            'instagram' => 'https://instagram.com/mdtuassafiiyah',
            'youtube' => 'https://youtube.com/mdtuassafiiyah',
            'maps_embed' => '<iframe src="https://www.google.com/maps/embed?pb=dummy" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'logo' => '',
            'hero_image' => '',
            'tahun_berdiri' => '1985',
            'kepala_madrasah' => 'KH. Ahmad Syafi\'i, M.Pd.I',
        ];

        foreach ($settings as $key => $value) {
            Setting::set($key, $value);
        }
    }
}
