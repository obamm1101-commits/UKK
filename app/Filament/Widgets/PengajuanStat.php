<?php

namespace App\Filament\Widgets;

use App\Models\Pengaduan;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PengajuanStat extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Menunggu', Pengaduan::select()->where('status', 'menunggu')->count()),
            Stat::make('Proses', Pengaduan::select()->where('status', 'proses')->count()),
            Stat::make('Selesai', Pengaduan::select()->where('status', 'selesai')->count()),
        ];
    }
}
