<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Extracurricular;

class ExtracurricularSeeder extends Seeder
{
    public function run(): void
    {
        $ekskul = [
            ['name' => 'Tahfidz Quran', 'description' => 'Program hafalan Al-Quran intensif dengan bimbingan metode talaqqi.'],
            ['name' => 'Kaligrafi Islam', 'description' => 'Seni menulis huruf Arab yang indah dan bernilai estetika tinggi.'],
            ['name' => 'Marawis/Hadroh', 'description' => 'Kesenian musik Islami untuk menumbuhkan kecintaan pada selawat.'],
            ['name' => 'Pramuka Madrasah', 'description' => 'Pendidikan kepanduan untuk melatih kedisiplinan dan kemandirian santri.'],
            ['name' => 'PMR', 'description' => 'Palang Merah Remaja untuk melatih kepedulian sosial dan kesehatan dasar.'],
            ['name' => 'Pidato/Khitobah', 'description' => 'Melatih kemampuan berbicara di depan umum (public speaking) dalam berdakwah.'],
            ['name' => 'Qiro\'ah', 'description' => 'Seni membaca Al-Quran dengan tartil dan nagham yang indah.'],
            ['name' => 'Komputer/Teknologi', 'description' => 'Pengenalan dasar-dasar komputer agar santri tidak tertinggal teknologi.'],
        ];

        foreach ($ekskul as $item) {
            Extracurricular::create([
                'name' => $item['name'],
                'description' => $item['description'],
                'is_active' => true,
            ]);
        }
    }
}
