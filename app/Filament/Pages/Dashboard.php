<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use App\Filament\Widgets\StatsOverview;

class Dashboard extends Page
{
    protected static string $view = 'filament.pages.dashboard';

    public static function getWidgets(): array
    {
        return [
            StatsOverview::class,
        ];
    }
}
