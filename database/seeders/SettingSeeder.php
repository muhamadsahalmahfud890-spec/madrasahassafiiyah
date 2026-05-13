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
            'whatsapp' => '083821321752',
            'email' => 'admin@assafiiyah.sch.id',
            'facebook' => 'https://facebook.com/mdtuassafiiyah',
            'instagram' => 'https://instagram.com/mdtuassafiiyah',
            'youtube' => 'https://youtube.com/mdtuassafiiyah',
            'twitter' => '',
            'tiktok' => '',
            'maps_embed' => '<iframe src="https://www.google.com/maps/embed?pb=dummy" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'logo' => '',
            'favicon' => '',
            'hero_image' => '',
            'tahun_berdiri' => '1985',
            'kepala_madrasah' => 'KH. Ahmad Syafi\'i, M.Pd.I',
            'nsm' => '121232750001',
            'npsn' => '60721234',
            'visi' => '<p>Mewujudkan generasi yang bertaqwa, cerdas, dan berakhlakul karimah.</p>',
            'misi' => '<ul><li>Menyelenggarakan pendidikan agama yang berkualitas.</li><li>Membentuk karakter santri yang disiplin dan mandiri.</li></ul>',
            'footer_text' => '© 2024 MDTU Assafiiyah. All rights reserved.',
            'meta_description' => 'Website resmi Madrasah Diniyah Takmiliyah Ula Assafiiyah. Lembaga pendidikan Islam berkualitas di Bekasi.',
            'meta_keywords' => 'madrasah, assafiiyah, mdtu, bekasi, pendidikan islam, sekolah agama',
            'pendaftaran_aktif' => '1',
            'link_pendaftaran_external' => '',
        ];

        foreach ($settings as $key => $value) {
            Setting::set($key, $value);
        }
    }
}
