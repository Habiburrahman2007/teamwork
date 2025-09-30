<?php

namespace App\Filament\Widgets;

use App\Models\Portfolio;
use App\Models\Like;
use App\Models\Comment;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Portfolios', Portfolio::count())
                ->description('Total portfolios uploaded')
                ->icon('heroicon-o-rectangle-stack'),

            Stat::make('Likes', Like::count())
                ->description('Total likes given')
                ->icon('heroicon-o-hand-thumb-up'),

            Stat::make('Comments', Comment::count())
                ->description('Total user comments')
                ->icon('heroicon-o-chat-bubble-left-right'),

            Stat::make('Users', User::count())
                ->description('Total registered users')
                ->icon('heroicon-o-user-group'),
        ];
    }
}
