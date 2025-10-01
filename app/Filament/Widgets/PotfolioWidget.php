<?php

namespace App\Filament\Widgets;

use App\Models\Portfolio;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PotfolioWidget extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Portfolios', Portfolio::count())
                ->description('Total portfolios uploaded')
                ->icon('heroicon-o-rectangle-stack'),
        ];
    }
}
