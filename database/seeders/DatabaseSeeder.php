<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            SettingSeeder::class,
            PageSeeder::class,
            PostSeeder::class,
            ExtracurricularSeeder::class,
            AgendaSeeder::class,
            GallerySeeder::class,
        ]);
    }
}
