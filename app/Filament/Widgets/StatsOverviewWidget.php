<?php

namespace App\Filament\Widgets;

use App\Models\PmbmRegistration;
use App\Models\Post;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Carbon\Carbon;

class StatsOverviewWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Santri Terdaftar', PmbmRegistration::count())
                ->description('Total pendaftar PMBM')
                ->color('success')
                ->icon('heroicon-o-users'),
                
            Stat::make('Pendaftar Hari Ini', PmbmRegistration::whereDate('created_at', Carbon::today())->count())
                ->description('Pendaftar baru hari ini')
                ->color('info')
                ->icon('heroicon-o-user-plus'),
                
            Stat::make('Artikel Aktif', Post::where('is_published', true)->count())
                ->description('Artikel dipublikasikan')
                ->color('warning')
                ->icon('heroicon-o-newspaper'),
                
            Stat::make('Pengumuman Aktif', Post::where('category', 'pengumuman')->where('is_published', true)->count())
                ->description('Pengumuman berjalan')
                ->color('primary')
                ->icon('heroicon-o-megaphone'),
        ];
    }
}
