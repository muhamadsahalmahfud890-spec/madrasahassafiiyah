<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        $posts = [
            // Berita
            ['title' => 'Peringatan Isra Miraj di MDTU Assafiiyah Berjalan Khidmat', 'category' => 'berita'],
            ['title' => 'Kunjungan Studi Banding dari Madrasah Diniyah Al-Ikhlas', 'category' => 'berita'],
            ['title' => 'Pelatihan Peningkatan Kapasitas Guru TPQ dan Madrasah', 'category' => 'berita'],
            ['title' => 'Penyaluran Zakat Fitrah oleh Santri MDTU Assafiiyah', 'category' => 'berita'],
            
            // Pengumuman
            ['title' => 'Pengumuman Libur Menyambut Bulan Suci Ramadhan 1447 H', 'category' => 'pengumuman'],
            ['title' => 'Jadwal Ujian Semester Ganjil Tahun Ajaran Baru', 'category' => 'pengumuman'],
            ['title' => 'Pendaftaran Santri Baru MDTU Assafiiyah Telah Dibuka', 'category' => 'pengumuman'],
            ['title' => 'Pengambilan Raport Hasil Evaluasi Belajar Santri', 'category' => 'pengumuman'],
            
            // Prestasi
            ['title' => 'Alhamdulillah, Santri MDTU Assafiiyah Juara 1 MTQ Tingkat Kabupaten', 'category' => 'prestasi'],
            ['title' => 'Tim Hadroh Assafiiyah Meraih Juara Favorit di Festival Santri', 'category' => 'prestasi'],
            ['title' => 'Santri Kelas 4 Berhasil Menyelesaikan Hafalan Juz 30', 'category' => 'prestasi'],
            ['title' => 'Penghargaan Guru Teladan Tingkat Kecamatan Diraih Ustadz Ahmad', 'category' => 'prestasi'],
        ];

        foreach ($posts as $post) {
            Post::create([
                'title' => $post['title'],
                'slug' => Str::slug($post['title']),
                'excerpt' => 'Ini adalah ringkasan dari ' . strtolower($post['title']) . ' yang berlangsung di lingkungan madrasah kami.',
                'content' => '<p>Ini adalah detail lengkap dari ' . strtolower($post['title']) . '. Alhamdulillah kegiatan berjalan dengan sangat lancar dan penuh berkah berkat rahmat Allah SWT.</p>',
                'category' => $post['category'],
                'is_published' => true,
                'published_at' => now(),
            ]);
        }
    }
}
