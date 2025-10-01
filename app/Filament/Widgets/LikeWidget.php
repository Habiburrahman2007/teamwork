<?php

namespace App\Filament\Widgets;

use App\Models\Like;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class LikeWidget extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Likes', Like::count())
                ->description('Total likes given')
                ->icon('heroicon-o-hand-thumb-up'),
        ];
    }
}
