<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gallery;

class GallerySeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 12; $i++) {
            Gallery::create([
                'title' => 'Kegiatan Islami Madrasah Bagian ' . $i,
                'image' => 'https://picsum.photos/seed/madrasah'.$i.'/800/600',
                'category' => 'Kegiatan',
            ]);
        }
    }
}
