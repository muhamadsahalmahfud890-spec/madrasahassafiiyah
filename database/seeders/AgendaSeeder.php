<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Agenda;
use Carbon\Carbon;

class AgendaSeeder extends Seeder
{
    public function run(): void
    {
        $agendas = [
            ['title' => 'Haflah Akhirussanah', 'description' => 'Perayaan akhir tahun ajaran dan pelepasan santri tingkat akhir.'],
            ['title' => 'Peringatan Maulid Nabi', 'description' => 'Acara pembacaan maulid simtudduror dan tausiyah keagamaan.'],
            ['title' => 'Pesantren Kilat Ramadhan', 'description' => 'Kajian kitab intensif selama bulan suci Ramadhan.'],
            ['title' => 'Wisuda Tahfidz', 'description' => 'Prosesi wisuda bagi santri yang telah menyelesaikan hafalan target.'],
            ['title' => 'Ujian Munaqosah', 'description' => 'Ujian akhir lisan dan tulisan penentu kelulusan santri.'],
            ['title' => 'Penyembelihan Hewan Kurban', 'description' => 'Kegiatan rutin Idul Adha di lingkungan masjid madrasah.'],
            ['title' => 'Lomba Gema Santri', 'description' => 'Ajang perlombaan antar kelas (class meeting) dalam bidang agama dan seni.'],
            ['title' => 'Rapat Wali Santri', 'description' => 'Pertemuan komite madrasah dan wali santri awal tahun ajaran baru.'],
        ];

        $date = Carbon::now()->addDays(5);

        foreach ($agendas as $agenda) {
            Agenda::create([
                'title' => $agenda['title'],
                'description' => $agenda['description'],
                'start_date' => $date->format('Y-m-d'),
                'end_date' => $date->copy()->addDays(rand(0, 2))->format('Y-m-d'),
                'location' => 'Aula MDTU Assafiiyah',
                'is_published' => true,
            ]);
            
            $date->addDays(rand(7, 20)); // Spacing the agendas
        }
    }
}
