<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Page;

class PageSeeder extends Seeder
{
    public function run(): void
    {
        $pages = [
            [
                'title' => 'Sambutan Kepala Madrasah',
                'slug' => 'sambutan',
                'content' => '<p>Assalamu\'alaikum Warahmatullahi Wabarakatuh.</p><p>Alhamdulillah, segala puji bagi Allah SWT atas segala nikmat-Nya. Shalawat serta salam senantiasa tercurah kepada junjungan kita Nabi Muhammad SAW.</p><p>Selamat datang di website resmi Madrasah Diniyah Takmiliyah Ula (MDTU) Assafiiyah. Kami berkomitmen untuk mendidik generasi Qurani yang berakhlak mulia dan berwawasan luas. Semoga madrasah ini terus menjadi ladang amal jariyah bagi kita semua.</p><p>Wassalamu\'alaikum Warahmatullahi Wabarakatuh.</p>',
                'is_published' => true,
            ],
            [
                'title' => 'Visi & Misi',
                'slug' => 'visi-misi',
                'content' => '<h3>Visi</h3><p>Terwujudnya Generasi Qurani yang Berakhlak Mulia, Berilmu Amaliah, dan Beramal Ilmiah.</p><h3>Misi</h3><ul><li>Menyelenggarakan pendidikan agama Islam yang berkualitas.</li><li>Membiasakan santri membaca dan menghafal Al-Quran.</li><li>Menanamkan nilai-nilai akhlakul karimah dalam kehidupan sehari-hari.</li></ul>',
                'is_published' => true,
            ],
            [
                'title' => 'Fasilitas',
                'slug' => 'fasilitas',
                'content' => '<p>MDTU Assafiiyah menyediakan berbagai fasilitas pendukung untuk kenyamanan belajar mengajar para santri, di antaranya:</p><ul><li>Masjid Jami\' Assafiiyah yang luas dan nyaman.</li><li>Ruang kelas yang bersih dan kondusif.</li><li>Perpustakaan Kitab yang dilengkapi dengan berbagai kitab kuning dan buku agama.</li><li>Area parkir dan lapangan olahraga.</li></ul>',
                'is_published' => true,
            ],
            [
                'title' => 'Kurikulum',
                'slug' => 'kurikulum',
                'content' => '<p>Kurikulum yang diterapkan di MDTU Assafiiyah memadukan standar kementerian dengan kurikulum pesantren salaf, dengan mata pelajaran utama meliputi:</p><ul><li>Al-Quran & Hadits</li><li>Aqidah Akhlak</li><li>Fiqih (Safinatun Najah, Taqrib)</li><li>Sejarah Kebudayaan Islam (Tarikh)</li><li>Bahasa Arab (Nahwu & Shorof dasar)</li></ul>',
                'is_published' => true,
            ],
            [
                'title' => 'Program Tahfidz',
                'slug' => 'tahfidz',
                'content' => '<p>Program unggulan MDTU Assafiiyah adalah Tahfidzul Quran. Setiap santri diwajibkan untuk mengikuti program hafalan dengan target hafalan Juz 30 (Juz Amma) sebelum kelulusan tingkat Ula.</p><p>Pembinaan dilakukan secara intensif melalui metode talaqqi dan muroja\'ah harian bersama para asatidz yang berkompeten.</p>',
                'is_published' => true,
            ],
        ];

        foreach ($pages as $page) {
            Page::create($page);
        }
    }
}
