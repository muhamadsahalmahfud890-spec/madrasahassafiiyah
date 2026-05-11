<?php

namespace App\Filament\Widgets;

use App\Models\PmbmRegistration;
use Filament\Widgets\ChartWidget;
use Carbon\Carbon;

class PmbmChartWidget extends ChartWidget
{
    protected ?string $heading = 'Pendaftar Santri Baru 7 Hari Terakhir';
    
    protected static ?int $sort = 2;

    protected function getData(): array
    {
        $data = [];
        $labels = [];

        for ($i = 6; $i >= 0; $i--) {
            $date = Carbon::today()->subDays($i);
            $labels[] = $date->translatedFormat('d M');
            $data[] = PmbmRegistration::whereDate('created_at', $date)->count();
        }

        return [
            'datasets' => [
                [
                    'label' => 'Pendaftar Baru',
                    'data' => $data,
                    'backgroundColor' => '#1a5c38',
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
