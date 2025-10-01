<?php

namespace App\Filament\Widgets;

use App\Models\Like;
use App\Models\User;
use App\Models\Comment;
use App\Models\Portfolio;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DashboardWidget extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            
        ];
    }
}
